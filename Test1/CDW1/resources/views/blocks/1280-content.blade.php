<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1280">
    <div class="background_img" style="background-image: url(<?php echo $url_path ?>/images/about.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-ms-6 col-xs-6">
                    <h1 class="h1">About Us</h1>
                </div>
                <div class="col-md-6 col-ms-6 col-xs-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a><i class="fa fa-angle-right"></i><a href="#">About Us </a></li>  
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container"> 
        <div class="h2"><h2>About Our DeluxHotel</h2></div>
        <div class="header_icon"><img id="header-icon" src="<?php echo $url_path ?>/images/header-icon.png" alt=""/></div>
        <div class="row">
            <div class="col-md-6 ">
                <div class="about_img">
                    <img id="aboutus_img" src="<?php echo $url_path ?>/images/aboutus.jpg" alt=""/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about_info">
                    <div class="about_title">
                        From 1990 to now...
                    </div>
                    <p>
                        May musical arrival beloved luckily adapted him. Shyness mention married son she his 
                        started now. Rose if as past near were. To graceful he elegance oh moderate attended 
                        entrance pleasure. Vulgar saw fat sudden edward way played either. Thoughts smallest 
                        at or peculiar relation breeding produced an. 
                        <br>
                        <br>
                        At depart spirit on stairs. She the either are wisdom praise things she before. Be 
                        mother itself vanity favour do me of. Begin was power joy after had walls miles. 
                        Wise busy past both park when an ye no. Nay likely her length sooner thrown lively 
                        income.
                    </p>
                    <a class="btn_contact" href="#">CONTACT US</a>
                </div>
            </div>
        </div>
    </div>
</div>

