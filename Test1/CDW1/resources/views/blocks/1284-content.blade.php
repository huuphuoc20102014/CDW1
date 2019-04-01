<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>


<!DOCTYPE html>
<div class="type-1284">
    <div class="gallery">
        <div class="container">
            <div class="tab">
                <div class="row"> 
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="h2">Meet Our Grand Hotel</h2>
                        <ul class="portfolio-sorting nav nav-tabs justify-content-center pt-0 pb-3">
                            <li><a href="#all" data-toggle="tab" class="active">All Rooms</a></li>
                            <li><a href="#entertainment" data-toggle="tab">Entertainment</a></li>
                            <li><a href="#restaurants" data-toggle="tab">Restaurants</a></li>
                            <li><a href="#sport" data-toggle="tab">Sport</a></li>
                            <li><a href="#service" data-toggle="tab">Service</a></li>
                        </ul>
                    </div>
                </div>

                <div class="tab-content pt-4">
                    <div class="container tab-pane active portfolio-items" id="all">

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="portfolio-item">
                                    <a href="#"><img src="images/1.jpg" alt="">
                                        <div class="portfolio-overlay">
                                            <div class="caption">Delux Double Room<span>Some descriptions for it...</span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="portfolio-item">
                                    <a href="#"><img src="images/2.jpg" alt="">
                                        <div class="portfolio-overlay">
                                            <div class="caption">Grand Super Luxury<span>Some descriptions for it...</span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="portfolio-item">
                                    <a href="#"><img src="images/3.jpg" alt="">
                                        <div class="portfolio-overlay">
                                            <div class="caption">Special Spa Room<span>Some descriptions for it...</span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="portfolio-item">
                                    <a href="#"><img src="images/4.jpg" alt="">
                                        <div class="portfolio-overlay">
                                            <div class="caption">Special Spa Room<span>Some descriptions for it...</span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="portfolio-item">
                                    <a href="#"><img src="images/5.jpg" alt="">
                                        <div class="portfolio-overlay">
                                            <div class="caption">Special Spa Room<span>Some descriptions for it...</span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="portfolio-item">
                                    <a href="#"><img src="images/6.jpg" alt="">
                                        <div class="portfolio-overlay">
                                            <div class="caption">Special Spa Room<span>Some descriptions for it...</span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="portfolio-item">
                                    <a href="#"><img src="images/7.jpg" alt="">
                                        <div class="portfolio-overlay">
                                            <div class="caption">Special Spa Room<span>Some descriptions for it...</span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="portfolio-item">
                                    <a href="#"><img src="images/8.jpg" alt="">
                                        <div class="portfolio-overlay">
                                            <div class="caption">Special Spa Room<span>Some descriptions for it...</span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end All-->

                    <div class="container tab-pane fade portfolio-items" id="entertainment">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="portfolio-item">
                                    <a href="#"><img src="images/1.jpg" alt="">
                                        <div class="portfolio-overlay">
                                            <div class="caption">Special Spa Room<span>Some descriptions for it...</span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="portfolio-item">
                                    <a href="#"><img src="images/3.jpg" alt="">
                                        <div class="portfolio-overlay">
                                            <div class="caption">Special Spa Room<span>Some descriptions for it...</span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="portfolio-item">
                                    <a href="#"><img src="images/4.jpg" alt="">
                                        <div class="portfolio-overlay">
                                            <div class="caption">Special Spa Room<span>Some descriptions for it...</span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="portfolio-item">
                                    <a href="#"><img src="images/5.jpg" alt="">
                                        <div class="portfolio-overlay">
                                            <div class="caption">Special Spa Room<span>Some descriptions for it...</span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="portfolio-item">
                                    <a href="#"><img src="images/7.jpg" alt="">
                                        <div class="portfolio-overlay">
                                            <div class="caption">Special Spa Room<span>Some descriptions for it...</span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=========================end entertainment-->

                    <div class="container tab-pane fade portfolio-items" id="restaurants">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="portfolio-item">
                                    <a href="#"><img src="images/3.jpg" alt=""/>
                                        <div class="portfolio-overlay">
                                            <div class="caption">Delux Double Room<span>Some descriptions for it...</span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="portfolio-item" >
                                    <a href="#"><img src="images/5.jpg" alt=""/>
                                        <div class="portfolio-overlay">
                                            <div class="caption">Delux Double Room<span>Some descriptions for it...</span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="portfolio-item">
                                    <a href="#"><img src="images/6.jpg" alt=""/>
                                        <div class="portfolio-overlay">
                                            <div class="caption">Delux Double Room<span>Some descriptions for it...</span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--========================end Restaurants-->
                    
                    <div class="container tab-pane fade portfolio-items" id="sport">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="portfolio-item">
                                    <a href="#"><img src="images/1.jpg" alt=""/>
                                        <div class="portfolio-overlay">
                                            <div class="caption">Delux Double Room<span>Some descriptions for it...</span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="portfolio-item">
                                    <a href="#"><img src="images/2.jpg" alt=""/>
                                        <div class="portfolio-overlay">
                                            <div class="caption">Delux Double Room<span>Some descriptions for it...</span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="portfolio-item">
                                    <a href="#"><img src="images/4.jpg" alt=""/>
                                        <div class="portfolio-overlay">
                                            <div class="caption">Delux Double Room<span>Some descriptions for it...</span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="portfolio-item">
                                    <a href="#"><img src="images/6.jpg" alt=""/>
                                        <div class="portfolio-overlay">
                                            <div class="caption">Delux Double Room<span>Some descriptions for it...</span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--===========================End sport-->


                    <div class="container tab-pane fade portfolio-items" id="service">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="portfolio-item">
                                    <a href="#"><img src="images/2.jpg" alt="">
                                        <div class="portfolio-overlay">
                                            <div class="caption">Delux Double Room<span>Some descriptions for it...</span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="portfolio-item">
                                    <a href="#"><img src="images/8.jpg" alt="">
                                        <div class="portfolio-overlay">
                                            <div class="caption">Delux Double Room<span>Some descriptions for it...</span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--===============end Service-->

                </div>
            </div>
        </div>
    </div>         
</div>

