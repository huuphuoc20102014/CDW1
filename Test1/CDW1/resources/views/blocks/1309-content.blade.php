<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1309">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12 col-lg-6" id="logo">
                <h3 class="noo-theme-title">
                    <span class="first-word">Latest<span></span></span> Properties </h3>
                <p class="noo-theme-sub-title">
                    We have hundreds of properties for you to choose from. </p>
            </div>
            <div class="col-md-6 col-xs-12 col-lg-6">
                <div class="noo-action-slider">
                    <i class=" prev-property fa fa-chevron-left"></i>
                    <i class=" next-property fa fa-chevron-right"></i>
                </div>
            </div>
        </div>
        <div class="list">
            <div class="row">
                <div class="col-xs-10 col-md-4 col-lg-4" id="title">
                    <div class="col-md-12" id="detail">
                        <div class="col-md-4" id="feature">
                            FEATURED
                        </div>
                        <a href="#" id="name">Loft Above The City</a>

                        <h5 id="adress"><i class="fa fa-heart"></i> Hope Street (Stop P), London SW11, UK</h5>
                    </div>
                    <div class="col-md-12" id="img-house">

                        <a href="#" title="Loft Above The City" tabindex="0">
                            <img class="img-responsive" src="../1309/images/property2-370x210.jpg" alt="Loft Above The City">
                        </a>
                        <div class="rent">FOR RENT</div>

                    </div>
                    <div class="col-md-12 " id="infomation">
                        <div class="col-md-6">
                            <div class="col-md-12" id="ruler">
                                <i class="fa fa-heart"></i>  1200 m2
                            </div>
                            <div class="col-md-12" id="bed">
                                <i class="fa fa-heart"></i>  3 Bathrooms
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12" id="bath">
                                <i class="fa fa-heart"></i>  3 Bathrooms
                            </div>
                            <div class="col-md-12" id="gara">
                                <i class="fa fa-warehouse"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" id="price">
                        <div class="col-md-6" id="month">
                            <span>$2000 / month</span>
                        </div>
                        <div class="col-md-2" id="like1">
                            <a href="#"><i class="fa fa-heart"></i></a>
                        </div>
                        <div class="col-md-2" id="like2">
                            <a href="#"><i class="fa fa-exchange"></i></a>
                        </div>
                        <div class="col-md-2" id="like3">
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-10 col-md-4 col-lg-4" id="title1">
                    <div class="col-md-12" id="detail">
                        <div class="col-md-4" id="feature">
                            FEATURED
                        </div>
                        <a href="#" id="name">Loft Above The City</a>

                        <h5 id="adress"><i class="fa fa-heart"></i> Hope Street (Stop P), London SW11, UK</h5>
                    </div>
                    <div class="col-md-12" id="img-house">

                        <a href="#" title="Loft Above The City" tabindex="0">
                            <img class="img-responsive" src="../1309/images/property2-370x210.jpg" alt="Loft Above The City">
                        </a>
                        <div class="rent">FOR RENT</div>

                    </div>
                    <div class="col-md-12 " id="infomation">
                        <div class="col-md-6">
                            <div class="col-md-12" id="ruler">
                                <i class="fa fa-heart"></i>  1200 m2
                            </div>
                            <div class="col-md-12" id="bed">
                                <i class="fa fa-heart"></i>  3 Bathrooms
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12" id="bath">
                                <i class="fa fa-heart"></i>  3 Bathrooms
                            </div>
                            <div class="col-md-12" id="gara">
                                <i class="fa fa-warehouse"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" id="price">
                        <div class="col-md-6" id="month">
                            <span>$2000 / month</span>
                        </div>
                        <div class="col-md-2" id="like1">
                            <a href="#"><i class="fa fa-heart"></i></a>
                        </div>
                        <div class="col-md-2" id="like2">
                            <a href="#"><i class="fa fa-exchange"></i></a>
                        </div>
                        <div class="col-md-2" id="like3">
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-10 col-md-4 col-lg-4" id="title2">
                    <div class="col-md-12" id="detail">
                        <div class="col-md-4" id="feature">
                            FEATURED
                        </div>
                        <a href="#" id="name">Loft Above The City</a>

                        <h5 id="adress"><i class="fa fa-heart"></i> Hope Street (Stop P), London SW11, UK</h5>
                    </div>
                    <div class="col-md-12" id="img-house">

                        <a href="#" title="Loft Above The City" tabindex="0">
                            <img class="img-responsive" src="../1309/images/property2-370x210.jpg" alt="Loft Above The City">
                        </a>
                        <div class="rent">FOR RENT</div>

                    </div>
                    <div class="col-md-12 " id="infomation">
                        <div class="col-md-6">
                            <div class="col-md-12" id="ruler">
                                <i class="fa fa-heart"></i>  1200 m2
                            </div>
                            <div class="col-md-12" id="bed">
                                <i class="fa fa-heart"></i>  3 Bathrooms
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12" id="bath">
                                <i class="fa fa-heart"></i>  3 Bathrooms
                            </div>
                            <div class="col-md-12" id="gara">
                                <i class="fa fa-warehouse"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" id="price">
                        <div class="col-md-6" id="month">
                            <span>$2000 / month</span>
                        </div>
                        <div class="col-md-2" id="like1">
                            <a href="#"><i class="fa fa-heart"></i></a>
                        </div>
                        <div class="col-md-2" id="like2">
                            <a href="#"><i class="fa fa-exchange"></i></a>
                        </div>
                        <div class="col-md-2" id="like3">
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
