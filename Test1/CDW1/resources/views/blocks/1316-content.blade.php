<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1316">
    <div class="parallax-mirror" style="visibility: visible; z-index: -100; position: fixed; top: 130px; left: 0px; overflow: hidden; transform: translate3d(0px, 0px, 0px); height: 261px; width: 1518px;">
        <img class="parallax-slider" alt="banner" src="./images/banner-property-1316.png" style="transform: translate3d(0px, 0px, 0px); position: absolute; top: -267.4px; left: 0px; height: 657px; width: 1518px; max-width: none;">
    </div>

    <div class="site">
        <header class="noo-header header_default">
            <div class="navbar-wrapper">
                <div class="navbar navbar-default" role="navigation">
                    <div class="noo-container">
                        <div class="navbar-content">
                            <div class="navbar-header noo-md-2">
                                <button data-target=".nav-collapse" class="btn-navbar noo_icon_menu" type="button">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <a href="#" class="navbar-brand" title="Real Estate WordPress Theme">
                                    <img class="noo-logo-img noo-logo-normal" src="./images/logo_1316.png" alt="Real Estate WordPress Theme"> </a>
                            </div> 
                            <nav class=" noo-md-7  noo-main-menu">
                                <ul id="menu-menu-primary" class="nav-collapse navbar-nav"><li id="menu-item-2512" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children "><a href="#">Home</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-2041" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Home Advanced Search</a></li>
                                            <li id="menu-item-1503" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Home Map Vertical</a></li>
                                            <li id="menu-item-1597" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Home Map Horizontal</a></li>
                                            <li id="menu-item-1366" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Home Half Map</a></li>
                                            <li id="menu-item-1471" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Home Search Map</a></li>
                                            <li id="menu-item-1580" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Home Single Property</a></li>
                                            <li id="menu-item-2709" class="noo-menu   menu-item menu-item-type-custom menu-item-object-custom "><a href="#">Home dsIDXpress</a></li>
                                            <li id="menu-item-2708" class="noo-menu   menu-item menu-item-type-custom menu-item-object-custom "><a href="#">Home Optima Express</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-2450" class="noo-menu   menu-item menu-item-type-post_type_archive menu-item-object-noo_property menu-item-has-children "><a href="#">Properties</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-2463" class="noo-menu   menu-item menu-item-type-post_type_archive menu-item-object-noo_property "><a href="#">Property Listing</a></li>
                                            <li id="menu-item-2464" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-noo_property "><a href="#">Property FullWidth</a></li>
                                            <li id="menu-item-3127" class="noo-menu   menu-item menu-item-type-custom menu-item-object-custom "><a href="#">Property Left Sidebar</a></li>
                                            <li id="menu-item-2805" class="noo-menu   menu-item menu-item-type-custom menu-item-object-custom "><a href="#">Property Boxed Layout</a></li>
                                            <li id="menu-item-2806" class="noo-menu   menu-item menu-item-type-custom menu-item-object-custom "><a href="#">Property Tab Style</a></li>
                                            <li id="menu-item-3128" class="noo-menu   menu-item menu-item-type-custom menu-item-object-custom "><a href="#">Property Right Sidebar</a></li>
                                            <li id="menu-item-2619" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Property Landing Page</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-2465" class="noo-menu   menu-item menu-item-type-post_type_archive menu-item-object-noo_agent menu-item-has-children "><a href="#">Agents</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-2467" class="noo-menu   menu-item menu-item-type-post_type_archive menu-item-object-noo_agent "><a href="#">Agents List</a></li>
                                            <li id="menu-item-2466" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-noo_agent "><a href="#">Agent Details</a></li>
                                            <li id="menu-item-493" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Agent Dashboard</a></li>
                                            <li id="menu-item-529" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Agent Profile</a></li>
                                            <li id="menu-item-963" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">User Profile</a></li>
                                            <li id="menu-item-796" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">My Favorites</a></li>
                                            <li id="menu-item-2423" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Register Account</a></li>
                                            <li id="menu-item-320" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Add New Property</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-2178" class="noo-menu   menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children "><a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-2622" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Header With Search Form</a></li>
                                            <li id="menu-item-2621" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Header Below Map</a></li>
                                            <li id="menu-item-960" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-570 current_page_item current_page_parent "><a href="#">Blog List</a></li>
                                            <li id="menu-item-2018" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Blog Mansory</a></li>
                                            <li id="menu-item-2595" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-post "><a href="#">Blog Details FullWidth</a></li>
                                            <li id="menu-item-2596" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-post "><a href="#">Blog Details Sidebar</a></li>
                                            <li id="menu-item-1116" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Agent Package</a></li>
                                            <li id="menu-item-2176" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">About Us</a></li>
                                            <li id="menu-item-2177" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Contact Us</a></li>
                                            <li id="menu-item-2618" class="noo-menu   menu-item menu-item-type-custom menu-item-object-custom "><a href="#">404 Error</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-959" class="noo-menu noo_megamenu mega-col-columns-4   menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children "><a href="#">Shop</a>
                                        <ul class="sub-menu" style="left: -195px; right: -459px;">
                                            <li id="menu-item-1897" class="noo-menu   menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children fly-left"><a href="#">Shop Service</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-958" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Cart</a></li>
                                                    <li id="menu-item-957" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Checkout</a></li>
                                                    <li id="menu-item-956" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">My Account</a></li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-1900" class="noo-menu  noo_widget_area menu-item menu-item-type-custom menu-item-object-custom "><div class="noo_megamenu_widget_area"><div id="woocommerce_products-2" class="widget smk_sidebar_8iiq woocommerce widget_products"><h3 class="widget-title">Newest</h3><ul class="product_list_widget"><li>
                                                                <a href="#">
                                                                    <img src="./images/placeholder.png" alt="Placeholder" width="300" class="woocommerce-placeholder wp-post-image" height="300"> <span class="product-title">Free</span>
                                                                </a>
                                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>0</span>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img width="300" height="300" src="./images/29-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29-300x300.jpg 300w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29-100x100.jpg 100w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29-600x600.jpg 600w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29-150x150.jpg 150w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29-768x768.jpg 768w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29-240x240.jpg 240w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29.jpg 1000w" sizes="(max-width: 300px) 100vw, 300px"> <span class="product-title">Small Table Lamp</span>
                                                                </a>
                                                                <div class="star-rating"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>392</span>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img width="300" height="300" src="./images/28-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28-300x300.jpg 300w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28-100x100.jpg 100w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28-600x600.jpg 600w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28-150x150.jpg 150w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28-768x768.jpg 768w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28-240x240.jpg 240w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28.jpg 1000w" sizes="(max-width: 300px) 100vw, 300px"> <span class="product-title">Scissor Lamp</span>
                                                                </a>
                                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>456</span>
                                                            </li>
                                                        </ul></div></div></li>
                                            <li id="menu-item-1901" class="noo-menu  noo_widget_area menu-item menu-item-type-custom menu-item-object-custom "><div class="noo_megamenu_widget_area"><div id="woocommerce_products-3" class="widget smk_sidebar_6ypa woocommerce widget_products"><h3 class="widget-title">Sales</h3><ul class="product_list_widget"><li>
                                                                <a href="#">
                                                                    <img width="300" height="300" src="./images/26-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26-300x300.jpg 300w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26-100x100.jpg 100w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26-600x600.jpg 600w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26-150x150.jpg 150w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26-768x768.jpg 768w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26-240x240.jpg 240w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26.jpg 1000w" sizes="(max-width: 300px) 100vw, 300px"> <span class="product-title">Desiree Chair</span>
                                                                </a>
                                                                <div class="star-rating"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>790</span>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img width="300" height="300" src="./images/27-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27-300x300.jpg 300w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27-100x100.jpg 100w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27-600x600.jpg 600w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27-150x150.jpg 150w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27-768x768.jpg 768w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27-240x240.jpg 240w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27.jpg 1000w" sizes="(max-width: 300px) 100vw, 300px"> <span class="product-title">Puck Wall Lamp</span>
                                                                </a>
                                                                <div class="star-rating"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>215</span>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img width="300" height="300" src="./images/28-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28-300x300.jpg 300w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28-100x100.jpg 100w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28-600x600.jpg 600w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28-150x150.jpg 150w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28-768x768.jpg 768w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28-240x240.jpg 240w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28.jpg 1000w" sizes="(max-width: 300px) 100vw, 300px"> <span class="product-title">Scissor Lamp</span>
                                                                </a>
                                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>456</span>
                                                            </li>
                                                        </ul></div></div></li>
                                            <li id="menu-item-1957" class="noo-menu  noo_widget_area menu-item menu-item-type-custom menu-item-object-custom "><div class="noo_megamenu_widget_area"><div id="woocommerce_top_rated_products-3" class="widget smk_sidebar_78e2 woocommerce widget_top_rated_products"><h3 class="widget-title">Top Rated</h3><ul class="product_list_widget"><li>
                                                                <a href="#">
                                                                    <img width="300" height="300" src="./images/26-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26-300x300.jpg 300w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26-100x100.jpg 100w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26-600x600.jpg 600w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26-150x150.jpg 150w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26-768x768.jpg 768w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26-240x240.jpg 240w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26.jpg 1000w" sizes="(max-width: 300px) 100vw, 300px"> <span class="product-title">Desiree Chair</span>
                                                                </a>
                                                                <div class="star-rating"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>790</span>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img width="300" height="300" src="./images/27-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27-300x300.jpg 300w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27-100x100.jpg 100w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27-600x600.jpg 600w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27-150x150.jpg 150w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27-768x768.jpg 768w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27-240x240.jpg 240w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27.jpg 1000w" sizes="(max-width: 300px) 100vw, 300px"> <span class="product-title">Puck Wall Lamp</span>
                                                                </a>
                                                                <div class="star-rating"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>215</span>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img width="300" height="300" src="./images/29-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29-300x300.jpg 300w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29-100x100.jpg 100w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29-600x600.jpg 600w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29-150x150.jpg 150w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29-768x768.jpg 768w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29-240x240.jpg 240w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29.jpg 1000w" sizes="(max-width: 300px) 100vw, 300px"> <span class="product-title">Small Table Lamp</span>
                                                                </a>
                                                                <div class="star-rating"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>392</span>
                                                            </li>
                                                        </ul></div></div></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-2594" class="noo-menu noo_megamenu mega-col-columns-4   menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children "><a href="#">Features</a>
                                        <ul class="sub-menu" style="left: -195px; right: -459px;">
                                            <li id="menu-item-2598" class="noo-menu   menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children "><a href="#">Shortcodes</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-2602" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Advances Search Property</a></li>
                                                    <li id="menu-item-2603" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Noo Ads Banner</a></li>
                                                    <li id="menu-item-2604" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Noo FAQ</a></li>
                                                    <li id="menu-item-2605" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Noo Floor Plan</a></li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-2599" class="noo-menu   menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children "><a href="#">Shortcodes</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-2606" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Noo Gallery</a></li>
                                                    <li id="menu-item-2607" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Noo Mailchimp</a></li>
                                                    <li id="menu-item-2608" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Noo Partner</a></li>
                                                    <li id="menu-item-2609" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Noo Progress</a></li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-2600" class="noo-menu   menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children "><a href="#">Shortcodes</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-2610" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Noo Service</a></li>
                                                    <li id="menu-item-2611" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Properties list</a></li>
                                                    <li id="menu-item-2612" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Single Agent Contact</a></li>
                                                    <li id="menu-item-2613" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Single Property</a></li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-2601" class="noo-menu   menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children "><a href="#">Shortcodes</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-2614" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Single property Banner</a></li>
                                                    <li id="menu-item-2615" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Single Property Detail</a></li>
                                                    <li id="menu-item-2616" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Single property featured</a></li>
                                                    <li id="menu-item-2617" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="#">Single Property Map</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="magic-line hide-line" style="width: 86px; left: 309.688px;"></li></ul> </nav>
                            <div class="navbar-meta meta-property">
                                <div class="meta-content">
                                    <a href="#" title="Add Property" class="meta-property noo-button">
                                        <span><i class="fa fa-plus-circle"></i></span>Add Property </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> </header>
        <section class="noo-page-heading noo-parallax " data-parallax="scroll" data-image-src="./images/banner-property-1316.png">
            <div class="noo-container">
                <div class="wrap-page-title">
                    <h1 class="page-title">Our Blog</h1>
                    <div class="noo-page-breadcrumb">
                        <a href="#">Home</a><i class="icon ion-ios-arrow-forward"></i>Blog
                    </div> </div>
            </div>
        </section>
    </div>
    <!--    <div id="off-canvas-nav" style="">
            <div class="noo-main-canvas" style="top: 0px;"><ul id="menu-menu-primary" class="nav-collapse navbar-nav"><li id="menu-item-2512" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children "><a href="http://wp.nootheme.com/landmark/">Home</a>
                        <ul class="sub-menu">
                            <li id="menu-item-2041" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/home-v1/">Home Advanced Search</a></li>
                            <li id="menu-item-1503" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/home-v2/">Home Map Vertical</a></li>
                            <li id="menu-item-1597" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/home-v3/">Home Map Horizontal</a></li>
                            <li id="menu-item-1366" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/home-v4/">Home Half Map</a></li>
                            <li id="menu-item-1471" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/home-v5/">Home Search Map</a></li>
                            <li id="menu-item-1580" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/home-v6/">Home Single Property</a></li>
                            <li id="menu-item-2709" class="noo-menu   menu-item menu-item-type-custom menu-item-object-custom "><a href="http://wp.nootheme.com/landmark/dsidxpress/">Home dsIDXpress</a></li>
                            <li id="menu-item-2708" class="noo-menu   menu-item menu-item-type-custom menu-item-object-custom "><a href="http://wp.nootheme.com/landmark/optima-express/">Home Optima Express</a></li>
                        </ul>
                        <i class="fa fa-angle-down"></i></li>
                    <li id="menu-item-2450" class="noo-menu   menu-item menu-item-type-post_type_archive menu-item-object-noo_property menu-item-has-children "><a href="http://wp.nootheme.com/landmark/properties/">Properties</a>
                        <ul class="sub-menu">
                            <li id="menu-item-2463" class="noo-menu   menu-item menu-item-type-post_type_archive menu-item-object-noo_property "><a href="http://wp.nootheme.com/landmark/properties/">Property Listing</a></li>
                            <li id="menu-item-2464" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-noo_property "><a href="http://wp.nootheme.com/landmark/properties/villa-in-melbourne/">Property FullWidth</a></li>
                            <li id="menu-item-3127" class="noo-menu   menu-item menu-item-type-custom menu-item-object-custom "><a href="http://wp.nootheme.com/landmark/properties/villa-in-melbourne/?layout=left_sidebar">Property Left Sidebar</a></li>
                            <li id="menu-item-2805" class="noo-menu   menu-item menu-item-type-custom menu-item-object-custom "><a href="http://wp.nootheme.com/landmark/properties/villa-on-hollywood-boulevard-2/?content_style=list&amp;header_layout=boxed&amp;heading=on">Property Boxed Layout</a></li>
                            <li id="menu-item-2806" class="noo-menu   menu-item menu-item-type-custom menu-item-object-custom "><a href="http://wp.nootheme.com/landmark/properties/store-space-greenville/?content_style=tab&amp;header_layout=boxed&amp;heading=on">Property Tab Style</a></li>
                            <li id="menu-item-3128" class="noo-menu   menu-item menu-item-type-custom menu-item-object-custom "><a href="http://wp.nootheme.com/landmark/properties/villa-in-melbourne/?layout=sidebar">Property Right Sidebar</a></li>
                            <li id="menu-item-2619" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/home-v6/">Property Landing Page</a></li>
                        </ul>
                        <i class="fa fa-angle-down"></i></li>
                    <li id="menu-item-2465" class="noo-menu   menu-item menu-item-type-post_type_archive menu-item-object-noo_agent menu-item-has-children "><a href="http://wp.nootheme.com/landmark/agent/">Agents</a>
                        <ul class="sub-menu">
                            <li id="menu-item-2467" class="noo-menu   menu-item menu-item-type-post_type_archive menu-item-object-noo_agent "><a href="http://wp.nootheme.com/landmark/agent/">Agents List</a></li>
                            <li id="menu-item-2466" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-noo_agent "><a href="http://wp.nootheme.com/landmark/agent/bruck-banner/">Agent Details</a></li>
                            <li id="menu-item-493" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/agent-dashboard/">Agent Dashboard</a></li>
                            <li id="menu-item-529" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/agent-profile/">Agent Profile</a></li>
                            <li id="menu-item-963" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/user-profile/">User Profile</a></li>
                            <li id="menu-item-796" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/my-favorites/">My Favorites</a></li>
                            <li id="menu-item-2423" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/register-account/">Register Account</a></li>
                            <li id="menu-item-320" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/submit-property/">Add New Property</a></li>
                        </ul>
                        <i class="fa fa-angle-down"></i></li>
                    <li id="menu-item-2178" class="noo-menu   menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children "><a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li id="menu-item-2622" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/home-v4/">Header With Search Form</a></li>
                            <li id="menu-item-2621" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/home-v2/">Header Below Map</a></li>
                            <li id="menu-item-960" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-570 current_page_item current_page_parent "><a href="http://wp.nootheme.com/landmark/blog/">Blog List</a></li>
                            <li id="menu-item-2018" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/blog-mansory/">Blog Mansory</a></li>
                            <li id="menu-item-2595" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-post "><a href="http://wp.nootheme.com/landmark/10-steps-to-buying-a-property-off-plan/">Blog Details FullWidth</a></li>
                            <li id="menu-item-2596" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-post "><a href="http://wp.nootheme.com/landmark/a-living-rent-could-solve-the-housing-crisis-copy/">Blog Details Sidebar</a></li>
                            <li id="menu-item-1116" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/pricing-page/">Agent Package</a></li>
                            <li id="menu-item-2176" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/about-us/">About Us</a></li>
                            <li id="menu-item-2177" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/contact-us/">Contact Us</a></li>
                            <li id="menu-item-2618" class="noo-menu   menu-item menu-item-type-custom menu-item-object-custom "><a href="http://wp.nootheme.com/landmark/404-error">404 Error</a></li>
                        </ul>
                        <i class="fa fa-angle-down"></i></li>
                    <li id="menu-item-959" class="noo-menu noo_megamenu mega-col-columns-4   menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children "><a href="http://wp.nootheme.com/landmark/shop/">Shop</a>
                        <ul class="sub-menu">
                            <li id="menu-item-1897" class="noo-menu   menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children fly-left"><a href="#">Shop Service</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-958" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/cart/">Cart</a></li>
                                    <li id="menu-item-957" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/checkout/">Checkout</a></li>
                                    <li id="menu-item-956" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/my-account/">My Account</a></li>
                                </ul>
                                <i class="fa fa-angle-down"></i></li>
                            <li id="menu-item-1900" class="noo-menu  noo_widget_area menu-item menu-item-type-custom menu-item-object-custom "><div class="noo_megamenu_widget_area"><div id="woocommerce_products-2" class="widget smk_sidebar_8iiq woocommerce widget_products"><h3 class="widget-title">Newest</h3><ul class="product_list_widget"><li>
                                                <a href="http://wp.nootheme.com/landmark/shop/free/">
                                                    <img src="http://wp.nootheme.com/landmark/wp-content/plugins/woocommerce/assets/images/placeholder.png" alt="Placeholder" width="300" class="woocommerce-placeholder wp-post-image" height="300"> <span class="product-title">Free</span>
                                                </a>
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>0</span>
                                            </li>
                                            <li>
                                                <a href="http://wp.nootheme.com/landmark/shop/small-table-lamp/">
                                                    <img width="300" height="300" src="http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29-300x300.jpg 300w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29-100x100.jpg 100w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29-600x600.jpg 600w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29-150x150.jpg 150w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29-768x768.jpg 768w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29-240x240.jpg 240w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29.jpg 1000w" sizes="(max-width: 300px) 100vw, 300px"> <span class="product-title">Small Table Lamp</span>
                                                </a>
                                                <div class="star-rating"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>392</span>
                                            </li>
                                            <li>
                                                <a href="http://wp.nootheme.com/landmark/shop/scissor-lamp/">
                                                    <img width="300" height="300" src="http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28-300x300.jpg 300w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28-100x100.jpg 100w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28-600x600.jpg 600w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28-150x150.jpg 150w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28-768x768.jpg 768w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28-240x240.jpg 240w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28.jpg 1000w" sizes="(max-width: 300px) 100vw, 300px"> <span class="product-title">Scissor Lamp</span>
                                                </a>
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>456</span>
                                            </li>
                                        </ul></div></div></li>
                            <li id="menu-item-1901" class="noo-menu  noo_widget_area menu-item menu-item-type-custom menu-item-object-custom "><div class="noo_megamenu_widget_area"><div id="woocommerce_products-3" class="widget smk_sidebar_6ypa woocommerce widget_products"><h3 class="widget-title">Sales</h3><ul class="product_list_widget"><li>
                                                <a href="http://wp.nootheme.com/landmark/shop/desiree-chair/">
                                                    <img width="300" height="300" src="http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26-300x300.jpg 300w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26-100x100.jpg 100w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26-600x600.jpg 600w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26-150x150.jpg 150w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26-768x768.jpg 768w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26-240x240.jpg 240w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26.jpg 1000w" sizes="(max-width: 300px) 100vw, 300px"> <span class="product-title">Desiree Chair</span>
                                                </a>
                                                <div class="star-rating"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>790</span>
                                            </li>
                                            <li>
                                                <a href="http://wp.nootheme.com/landmark/shop/puck-wall-lamp/">
                                                    <img width="300" height="300" src="http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27-300x300.jpg 300w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27-100x100.jpg 100w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27-600x600.jpg 600w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27-150x150.jpg 150w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27-768x768.jpg 768w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27-240x240.jpg 240w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27.jpg 1000w" sizes="(max-width: 300px) 100vw, 300px"> <span class="product-title">Puck Wall Lamp</span>
                                                </a>
                                                <div class="star-rating"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>215</span>
                                            </li>
                                            <li>
                                                <a href="http://wp.nootheme.com/landmark/shop/scissor-lamp/">
                                                    <img width="300" height="300" src="http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28-300x300.jpg 300w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28-100x100.jpg 100w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28-600x600.jpg 600w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28-150x150.jpg 150w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28-768x768.jpg 768w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28-240x240.jpg 240w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/28.jpg 1000w" sizes="(max-width: 300px) 100vw, 300px"> <span class="product-title">Scissor Lamp</span>
                                                </a>
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>456</span>
                                            </li>
                                        </ul></div></div></li>
                            <li id="menu-item-1957" class="noo-menu  noo_widget_area menu-item menu-item-type-custom menu-item-object-custom "><div class="noo_megamenu_widget_area"><div id="woocommerce_top_rated_products-3" class="widget smk_sidebar_78e2 woocommerce widget_top_rated_products"><h3 class="widget-title">Top Rated</h3><ul class="product_list_widget"><li>
                                                <a href="http://wp.nootheme.com/landmark/shop/desiree-chair/">
                                                    <img width="300" height="300" src="http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26-300x300.jpg 300w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26-100x100.jpg 100w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26-600x600.jpg 600w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26-150x150.jpg 150w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26-768x768.jpg 768w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26-240x240.jpg 240w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/26.jpg 1000w" sizes="(max-width: 300px) 100vw, 300px"> <span class="product-title">Desiree Chair</span>
                                                </a>
                                                <div class="star-rating"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>790</span>
                                            </li>
                                            <li>
                                                <a href="http://wp.nootheme.com/landmark/shop/puck-wall-lamp/">
                                                    <img width="300" height="300" src="http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27-300x300.jpg 300w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27-100x100.jpg 100w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27-600x600.jpg 600w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27-150x150.jpg 150w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27-768x768.jpg 768w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27-240x240.jpg 240w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/27.jpg 1000w" sizes="(max-width: 300px) 100vw, 300px"> <span class="product-title">Puck Wall Lamp</span>
                                                </a>
                                                <div class="star-rating"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>215</span>
                                            </li>
                                            <li>
                                                <a href="http://wp.nootheme.com/landmark/shop/small-table-lamp/">
                                                    <img width="300" height="300" src="http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" srcset="http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29-300x300.jpg 300w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29-100x100.jpg 100w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29-600x600.jpg 600w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29-150x150.jpg 150w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29-768x768.jpg 768w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29-240x240.jpg 240w, http://wp.nootheme.com/landmark/wp-content/uploads/2016/09/29.jpg 1000w" sizes="(max-width: 300px) 100vw, 300px"> <span class="product-title">Small Table Lamp</span>
                                                </a>
                                                <div class="star-rating"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>392</span>
                                            </li>
                                        </ul></div></div></li>
                        </ul>
                        <i class="fa fa-angle-down"></i></li>
                    <li id="menu-item-2594" class="noo-menu noo_megamenu mega-col-columns-4   menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children "><a href="#">Features</a>
                        <ul class="sub-menu">
                            <li id="menu-item-2598" class="noo-menu   menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children "><a href="#">Shortcodes</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-2602" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/shortcode/advances-search-property/">Advances Search Property</a></li>
                                    <li id="menu-item-2603" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/shortcode/noo-ads-banner/">Noo Ads Banner</a></li>
                                    <li id="menu-item-2604" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/shortcode/noo-faq/">Noo FAQ</a></li>
                                    <li id="menu-item-2605" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/shortcode/noo-floor-plan/">Noo Floor Plan</a></li>
                                </ul>
                                <i class="fa fa-angle-down"></i></li>
                            <li id="menu-item-2599" class="noo-menu   menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children "><a href="#">Shortcodes</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-2606" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/shortcode/noo-gallery/">Noo Gallery</a></li>
                                    <li id="menu-item-2607" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/shortcode/noo-mailchimp/">Noo Mailchimp</a></li>
                                    <li id="menu-item-2608" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/shortcode/noo-partner/">Noo Partner</a></li>
                                    <li id="menu-item-2609" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/shortcode/noo-progress/">Noo Progress</a></li>
                                </ul>
                                <i class="fa fa-angle-down"></i></li>
                            <li id="menu-item-2600" class="noo-menu   menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children "><a href="#">Shortcodes</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-2610" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/shortcode/noo-service/">Noo Service</a></li>
                                    <li id="menu-item-2611" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/shortcode/properties-list/">Properties list</a></li>
                                    <li id="menu-item-2612" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/shortcode/single-agent-contact/">Single Agent Contact</a></li>
                                    <li id="menu-item-2613" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/shortcode/single-property/">Single Property</a></li>
                                </ul>
                                <i class="fa fa-angle-down"></i></li>
                            <li id="menu-item-2601" class="noo-menu   menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children "><a href="#">Shortcodes</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-2614" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/shortcode/single-property-banner/">Single property Banner</a></li>
                                    <li id="menu-item-2615" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/shortcode/single-property-detail/">Single Property Detail</a></li>
                                    <li id="menu-item-2616" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/shortcode/single-property-featured/">Single property featured</a></li>
                                    <li id="menu-item-2617" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page "><a href="http://wp.nootheme.com/landmark/shortcode/single-property-map/">Single Property Map</a></li>
                                </ul>
                                <i class="fa fa-angle-down"></i></li>
                        </ul>
                        <i class="fa fa-angle-down"></i></li>
                    <li class="magic-line hide-line" style="width: 86px; left: 309.688px;"></li></ul></div></div>-->
</div>     

