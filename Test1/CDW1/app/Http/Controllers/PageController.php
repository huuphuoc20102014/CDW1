<?php namespace App\Http\Controllers;

/*
|-------------------------------------------------------------------------------
| FrontController
|-------------------------------------------------------------------------------
| @author: Kang
| @website: http://foostart.com
| @date: 27/01/2018
|
 */

use Illuminate\Http\Request;
use URL,
    Route,
    Redirect;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;


class PageController extends Controller {

    //send data to view
    public $data_view = [
        'context_name' => NULL,
        'context_id' => NULL
    ];

    //package name
    public $package_name = 'package-front';

    //directory blocks
    public $dir_blocks = 'D:\PHU\ltw2\source-block\source-block';

    //list of blocks id
    public $block_ids = [];

    //list of blocks id that using per page
    public $block_page_ids = [];

    //manage categories
    public $obj_category;

    //minify
    public $obj_css = NULL;
    public $obj_js = NULL;

    //current user
    public $user = NULL;
    public $user_id = NULL;
    public $user_full_name = NULL;
    public $user_email = NULL;
    public $token_api = NULL;

    //cache
    public $cache = NULL;

    public function setUserInfo($user) {

        $user = is_array($user) ? (object)$user : $user;
        $this->user_id = !empty($user->user_id) ? $user->user_id : NULL;
        $this->user_full_name = !empty($user->user_full_name) ? $user->user_full_name : 'Unknow';
        $this->user_email = !empty($user->user_email) ? $user->user_email : 'Unknow';
        $this->token_api = !empty($user->token_api) ? $user->token_api : NULL;

        $this->data_view = array_merge($this->data_view, array(
            'user_id' => $this->user_id,
            'user_full_name' => $this->user_full_name,
            'user_email' => $this->user_email,
            'token_api' => $this->token_api
        ));

        return $this->data_view;
    }
    /**
     * //TODO: cache user info
     * Get current logged user info
     * @return ARRAY user info
     * @date 28/12/2017
     */
    public function getUser() {

        $authentication = \App::make('authenticator');
        $profile_repository = \App::make('profile_repository');

        if ($user = $authentication->getLoggedUser()) {
            $this->user = $user;
            $this->user['user_id'] = $this->user['id'];

            $user_profile = $profile_repository->getFromUserId($this->user['id'])->toArray();

            $this->user['user_full_name'] = $user_profile['first_name'].' '.$user_profile['last_name'];

            unset($this->user['id']);
            unset($this->user['created_at']);
            unset($this->user['updated_at']);
        }

        return $this->user;
    }

    /**
     * Constructor
     */
    public function __construct() {
        //send data to view
        $this->data_view['dir_blocks'] = $this->dir_blocks;
        //object category
        $this->obj_category = NULL;

        //load menu to header
        $params = array(
            'order' => array(
                'category_order' => 'ASC',
            )
        );

        //minify
        $this->obj_css = null;
        $this->obj_js = null;

        //cache config
        $this->cache = config($this->package_name.'.cache');

    }

    /**
     * Copy all files from source to target
     * @param STRING $source
     * @param STRING $target
     */
    public function xcopy($source, $target) {
        if (is_dir($source)) {
            $d = dir($source);
            while (FALSE !== ( $entry = $d->read() )) {
                if ($entry == '.' || $entry == '..') {
                    continue;
                }
                $Entry = $source . '/' . $entry;
                if (is_dir($Entry)) {
                    $this->xcopy($Entry, $target . '/' . $entry);
                    continue;
                }
                copy($Entry, $target . '/' . $entry);
            }

            $d->close();
        } else {
            if (!empty($source)) {
                copy($source, $target);
            }
        }
    }

    /**
     * Copy list of assets: css, js, libs from source block to public assets
     */
    public function copy_assets($flag = true) {

        if ($flag) {
            $css = 'css';
            $js = 'js';
            $less = 'less';
        } else {
            $css = '_css';
            $js = '_js';
            $less = '_less';
        }

        //define list of using assets
        $page_config = config('package-front.page_config');

        //copy css from block to public system
        $env = env('APP_ENV');
        switch ($env) {
            case $env:

                //copy block assets to public assets
                $blocks_path = realpath($this->dir_blocks);
                $assets_path = 'C:\xampp\htdocs\l54\public\pages';

                //CSS
                foreach ($page_config as $_page) {

                    foreach ($_page['ids'] as $_id) {

                        $source = realpath($blocks_path . '/' . $_id . '/css/' . $_id . '.css');
                        if (!empty($source)) {
                            $target = $assets_path . "/{$css}/blocks/" . $_id . '.css';
                            copy($source, $target);
                        }

                    }
                }

                //LESS
                foreach ($page_config as $_page) {

                    foreach ($_page['ids'] as $_id) {

                        $source = realpath($blocks_path . '/' . $_id . '/less/' . $_id . '.less');
                        if (!empty($source)) {
                            $target = $assets_path . "/{$less}/blocks/" . $_id . '.less';
                            copy($source, $target);
                        }

                    }
                }

                //JS
                foreach ($page_config as $_page) {

                    foreach ($_page['ids'] as $_id) {

                        $source = realpath($blocks_path . '/' . $_id . '/js/' . $_id . '.js');
                        if (!empty($source)) {
                            $target = $assets_path . "/{$js}/blocks/" . $_id . '.js';
                            copy($source, $target);
                        }
                    }
                }

                //lib
                foreach ($page_config as $_page) {

                    foreach ($_page['libs'] as $_id => $_config) {

                        foreach ($_config as $_type => $_values) {

                            $type = $_type;

                            if (!$flag) {
                                $type = '_' . $_type;
                            }

                            switch ($_type) {
                                case 'js':
                                case 'css':
                                    foreach ($_values as $_item) {
                                        $_source = realpath($blocks_path . '/' . $_id . '/' . $_type . '/' . $_item . '.' . $_type);
                                        if (!empty($_source)) {
                                            $_target = $assets_path . '/' . $type . '/blocks/' . $_item . '.' . $_type;
                                            copy($_source, $_target);
                                        }
                                    }
                                    break;
                            }
                        }//end $_values
                    }//end $_config
                }//end $_page

                break;
            case 'production':
                break;
        }
    }

    /**
     * Copy background image from assets
     */
    public function copyBackgroundImage() {

        $bkg_images = [];
        $config_pages = $this->configBlockPageIds();

        $patterns = [
            'image' => '/url\([\'"]*\.\.\/images\/(.*?)[\'"]*\)/',
        ];
        //find list of background images
        foreach ($config_pages as $page) {
            //css
            if (!empty($page['ids'])) {
                foreach ($page['ids'] as $_id) {
                    $dir_asset_css = realpath(public_path('packages/foostart/package-front/css/blocks/'.$_id.'.css'));

                    if ($dir_asset_css) {
                        $css_content = file_get_contents($dir_asset_css);

                        preg_match_all($patterns['image'], $css_content, $matches);
                        if (!empty($matches[1])) {
                            foreach ($matches[1] as $image_name) {
                                if (!in_array($image_name, $bkg_images)) {
                                    $bkg_images[] = $image_name;
                                }
                            }
                        }
                    }
                }
            }
        }

        //copy to css image
        if (!empty($bkg_images)) {

            foreach ($bkg_images as $image_name) {
                //source
                $_source = realpath(public_path('images/'.$image_name));
                //target
                $_target = realpath(public_path('packages/foostart/package-front/css/images')).'/'.$image_name;
                //copy
                $this->xcopy($_source, $_target);
            }
        }

    }
    /**
     * Install blocks: copy blade, copy assets, copy images, copy background image
     */
    public function installBlocks() {

        //list of block ids
        $this->block_ids = config('package-front.block_ids');
        //target directory of blocks
//        $dir_target_blocks = realpath(realpath(__DIR__ . '/../../..'));
        $dir_target_blocks = 'C:\xampp\htdocs\l54\resources\views\blocks';
        /**
         * copy to blade content
         */
        foreach ($this->block_ids as $id) {
            //source content
            $_source = realpath($this->dir_blocks . '/' . $id . '/' . $id . '-content.php');
            $_target = $dir_target_blocks . '/' . $id . '-content.blade.php';

            if ($_source) {
                copy($_source, $_target);
            }
        }

        /**
         * copy to images
         */

        /**
         * copy background image  $this->copyBackgroundImage();

        /**
         * Copy assets (css, js, libs) from block source
         */
        $this->copy_assets();
    }

    /**
     * List of config all pages
     */
    public function configBlockPageIds() {
        $this->block_page_ids = [
            'home' => $this->getPageConfig('home'),
            'blog' => $this->getPageConfig('blog'),
            'about' => $this->getPageConfig('about'),
            'blog-detail' => $this->getPageConfig('blog-detail'),
            'contact' => $this->getPageConfig('contact'),
            'course' => $this->getPageConfig('course'),
            'course-detail' => $this->getPageConfig('course-detail'),
            'edit-profile' => $this->getPageConfig('edit-profile'),
            'error' => $this->getPageConfig('error'),
            'event-detail' => $this->getPageConfig('event-detail'),
            'event' => $this->getPageConfig('event'),
            'faq' => $this->getPageConfig('faq'),
            'gallery' => $this->getPageConfig('gallery'),
            'lesson' => $this->getPageConfig('lesson'),
            'news' => $this->getPageConfig('news'),
            'service' => $this->getPageConfig('service'),
            'signin' => $this->getPageConfig('signin'),
            'student-login' => $this->getPageConfig('student-login'),
            'student-profile' => $this->getPageConfig('student-profile'),
            'teacher-profile' => $this->getPageConfig('teacher-profile'),
        ];
        return $this->block_page_ids;
    }

    /**
     * Get page config
     * @return ARRAY list of config assets
     */
    public function getPageConfig($page_name) {
        return config('package-front.page_config.'.$page_name);
    }

    /**
     * Get assets link by page name
     * @param STRING $page_name
     * @return STRING list of assets that using in page
     */
    public function getAssetPage($page_name) {
        $str_assets = '';
        $assets = $this->getPageConfig($page_name);

        $evn = env('APP_ENV');
        if ($evn == 'production') {
            //load link lib
            $url_asset_css = url('/packages/foostart/package-front/css/'.$page_name.'-styles.css');
            $str_css = '<link href="'.$url_asset_css.'" rel="stylesheet" type="text/css">';

            $url_asset_js = url('/packages/foostart/package-front/js/'.$page_name.'-scripts.js');
            $str_js = '<script src="'.$url_asset_js.'" type="text/javascript" async></script>';

            $str_assets = [
                $str_css,
                $str_js,
            ];
        } else {
            $str_assets = $this->_getAssetPage($assets, $page_name);
        }

        return $str_assets;
    }

    /**
     *
     * @param ARRAY $assets list of configs of page
     * @return STRING HTML CODE included css, js path
     */
    public function _getAssetPage($assets, $page_name) {
        $dirs = [];
        $str_assets = [];

        /**
         * core lib
         */
        //dir path
        $dirs['css'] = config('package-front.assets_lib.css');
        $dirs['js'] = config('package-front.assets_lib.js');
        //css
        foreach ($dirs['css'] as $_item) {
            $_dir_css = realpath(public_path($_item));
            //check existing file
            if ($_dir_css) {
                $url_asset_css = url($_item);
                $str_assets[] = '<link href="'.$url_asset_css.'" rel="stylesheet" type="text/css">';
            }
        }

        //js
        foreach ($dirs['js'] as $_item) {
            $_dir_css = realpath(public_path($_item));
            //check existing file
            if ($_dir_css) {
                $url_asset_js = url($_item);
                $str_assets[] = '<script src="'.$url_asset_js.'" type="text/javascript"></script>';
            }
        }

        /**
         * page lib
         */
        foreach ($assets['libs'] as $_id => $_asset) {

            foreach ($_asset as $_type => $_items) {

                foreach ($_items as $_item) {

                    //css
                    if ($_type == 'css') {

                        $_dir_css = realpath(public_path('packages/foostart/package-front/css/blocks/'.$_item.'.css'));

                        //check existing file
                        if ($_dir_css) {
                            $url_asset_css = url('/packages/foostart/package-front/css/blocks/'.$_item.'.css');
                            $str_assets[] = '<link href="'.$url_asset_css.'" rel="stylesheet" type="text/css">';

                            $dirs['css'][] = $_dir_css;
                        }
                    }

                    //js
                    if ($_type == 'js'){

                        $_dir_js = realpath(public_path('packages/foostart/package-front/js/blocks/'.$_item.'.js'));

                        //check existing file
                        if ($_dir_js) {
                            $url_asset_js = url('/packages/foostart/package-front/js/blocks/'.$_item.'.js');
                            $str_assets[] = '<script src="'.$url_asset_js.'" type="text/javascript"></script>';

                            $dirs['js'][] = $_dir_js;
                        }
                    }
                }
            }
        }

        //css
        if($assets && !empty($assets['ids'])) {
            foreach ($assets['ids'] as $id) {
                $_dir_css = realpath(public_path('packages/foostart/package-front/css/blocks/'.$id.'.css'));

                //check existing file
                if ($_dir_css) {
                    $url_asset_css = url('/packages/foostart/package-front/css/blocks/'.$id.'.css');
                    $str_assets[] = '<link href="'.$url_asset_css.'" rel="stylesheet" type="text/css">';

                    $dirs['css'][] = $_dir_css;
                }
            }
        }

        //js
        if($assets && !empty($assets['ids'])) {
            foreach ($assets['ids'] as $id) {
                $_dir_js = realpath(public_path('packages/foostart/package-front/js/blocks/'.$id.'.js'));

                //check existing file
                if ($_dir_js) {
                    $url_asset_js = url('/packages/foostart/package-front/js/blocks/'.$id.'.js');
                    $str_assets[] = '<script src="'.$url_asset_js.'" type="text/javascript"></script>';

                    $dirs['js'][] = $_dir_js;
                }
            }
        }


        //core lib


        return $str_assets;
    }

    /**
     *
     * @param type $dirs list of css file
     * @param STRING $output_path css output file
     */
    public function minifyCSS($dirs, $output_path) {

        $css_lib = config('package-front.assets_lib.css');

        foreach ($css_lib as $lib) {
            $dir_css = realpath(public_path($lib));
            $this->obj_css->add($dir_css);
        }

        //merger all the css files
        foreach ($dirs as $dir) {
            $this->obj_css->add($dir);
        }
        //output the file
        $this->obj_css->minify($output_path);

    }

        /**
     *
     * @param type $dirs list of JS file
     * @param STRING $output_path JS output file
     */
    public function minifyJS($dirs, $output_path) {

        $js_lib = config('package-front.assets_lib.js');

        foreach ($js_lib as $lib) {
            $dir_js = realpath(public_path($lib));
            $this->obj_js->add($lib);
        }

        //merger all the css files
        foreach ($dirs as $dir) {
            $this->obj_js->add($dir);
        }
        //output the file
        $this->obj_js->minify($output_path);

    }

    public function convertLESS2CSS(){
        $this->copy_assets(FALSE);
    }

}
