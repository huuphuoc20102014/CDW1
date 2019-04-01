<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1288">
    <div class="container">
        <h2>Best Rooms For Your Comfort</h2>
        <div class="tab">
            <ul class="nav-menu nav nav-tabs justify-content-center pt-0" style="border-bottom:none">
                <li class="nav-item active">
                    <a href="#all " data-toggle="tab" class="nav-link">All</a>
                </li>
                <li class="nav-item">
                    <a href="#double" data-toggle="tab" class="nav-link">Double</a>
                </li>
                <li class="nav-item">
                    <a href="#lux" data-toggle="tab" class="nav-link">Luxury</a>
                </li>
                <li class="nav-item">
                    <a href="#standard" data-toggle="tab" class="nav-link">Standard</a>
                </li>
                <li class="nav-item">
                    <a href="#economic" data-toggle="tab" class="nav-link">Economic</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="container tab-pane active" id="all" style="position: relative; overflow: hidden;transition: height 250ms ease-out 0s;">
                            <div class="row item">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="card box-rooms" style="border: none;">
                                            <div class="card-img-top image">
                                                <a href="">
                                                    <img src="<?php echo $url_path ?>/images/all-1.jpg" alt="" style="width:100%"/>
                                                </a>
                                                <div class="link-detail">
                                                    <div class="icon-details">
                                                        <a href="#">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body content">
                                                <div class="content-title">
                                                    <h5><a href="">Grand super LUX</a></h5>
                                                </div>
                                                <p class="card-text">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</p>
                                                <div class="content-price">
                                                    <span>$49</span>/night
                                                </div>
                                                <div class="content-footer">
                                                    <div class="footer-bed"><i class="fa fa-bed"></i> 2</div>
                                                    <div class="foote-people"><i class="fa fa-user"></i> 4</div>
                                                    <div class="footer-wifi">Free WiFi</div>
                                                    <div class="footer-area">60 sqm</div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 box-content">
                                        <div class="card box-rooms" style="border: none;">
                                            <div class="card-img-top">
                                                <img src="<?php echo $url_path ?>/images/all-2.jpg" alt="" style="width:100%"/>
                                                <div class="link-detail">
                                                    <div class="icon-details">
                                                            <a href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body content">
                                                <div class="content-title">
                                                    <h5><a href="">Grand super LUX</a></h5>
                                                </div>
                                                <p class="card-text">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</p>
                                                <div class="content-price">
                                                    <span>$319</span>/night
                                                </div>
                                                <div class="content-footer">
                                                    <div class="footer-bed"><i class="fa fa-bed"></i> 2</div>
                                                    <div class="foote-people"><i class="fa fa-user"></i> 4</div>
                                                    <div class="footer-wifi">Free WiFi</div>
                                                    <div class="footer-area">60 sqm</div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="card box-rooms" style="border: none;">
                                            <div class="card-img-top">
                                                <img src="<?php echo $url_path ?>/images/all-3.jpg" alt="" style="width:100%"/>
                                                <div class="link-detail">
                                                    <div class="icon-details">
                                                            <a href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body content">
                                                <div class="content-title">
                                                    <h5><a href="">President double LUXE</a></h5>
                                                </div>
                                                <p class="card-text">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</p>
                                                <div class="content-price">
                                                    <span>$149</span>/night
                                                </div>
                                                <div class="content-footer">
                                                    <div class="footer-bed"><i class="fa fa-bed"></i> 2</div>
                                                    <div class="foote-people"><i class="fa fa-user"></i> 4</div>
                                                    <div class="footer-wifi">Free WiFi</div>
                                                    <div class="footer-area">60 sqm</div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="row item">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="card box-rooms" style="border: none;">
                                            <div class="card-img-top">
                                                <img src="<?php echo $url_path ?>/images/all-4.jpg" alt="" style="width:100%"/>
                                                <div class="link-detail">
                                                    <div class="icon-details">
                                                            <a href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body content">
                                                <div class="content-title">
                                                    <h5><a href="">Special spa room</a></h5>
                                                </div>
                                                <p class="card-text">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</p>
                                                <div class="content-price">
                                                    <span>$739</span>/night
                                                </div>
                                                <div class="content-footer">
                                                    <div class="footer-bed"><i class="fa fa-bed"></i> 2</div>
                                                    <div class="foote-people"><i class="fa fa-user"></i> 4</div>
                                                    <div class="footer-wifi">Free WiFi</div>
                                                    <div class="footer-area">60 sqm</div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 box-content">
                                        <div class="card box-rooms" style="border: none;">
                                            <div class="card-img-top">
                                                <img src="<?php echo $url_path ?>/images/all-5.jpg" alt="" style="width:100%"/>
                                                <div class="link-detail">
                                                    <div class="icon-details">
                                                            <a href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body content">
                                                <div class="content-title">
                                                    <h5><a href="">President double LUXE</a></h5>
                                                </div>
                                                <p class="card-text">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</p>
                                                <div class="content-price">
                                                    <span>$109</span>/night
                                                </div>
                                                <div class="content-footer">
                                                    <div class="footer-bed"><i class="fa fa-bed"></i> 2</div>
                                                    <div class="foote-people"><i class="fa fa-user"></i> 4</div>
                                                    <div class="footer-wifi">Free WiFi</div>
                                                    <div class="footer-area">60 sqm</div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="card box-rooms" style="border: none;">
                                            <div class="card-img-top">
                                                <img src="<?php echo $url_path ?>/images/all-6.jpg" alt="" style="width:100%"/>
                                                <div class="link-detail">
                                                    <div class="icon-details">
                                                            <a href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body content">
                                                <div class="content-title">
                                                    <h5><a href="">Special spa room</a></h5>
                                                </div>
                                                <p class="card-text">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</p>
                                                <div class="content-price">
                                                    <span>$1.449</span>/night
                                                </div>
                                                <div class="content-footer">
                                                    <div class="footer-bed"><i class="fa fa-bed"></i> 2</div>
                                                    <div class="foote-people"><i class="fa fa-user"></i> 4</div>
                                                    <div class="footer-wifi">Free WiFi</div>
                                                    <div class="footer-area">60 sqm</div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="row item">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="card box-rooms" style="border: none;">
                                            <div class="card-img-top">
                                                <img src="<?php echo $url_path ?>/images/all-7.jpg" alt="" style="width:100%"/>
                                                <div class="link-detail">
                                                    <div class="icon-details">
                                                        <a href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body content">
                                                <div class="content-title">
                                                    <h5><a href="">Grand super LUX</a></h5>
                                                </div>
                                                <p class="card-text">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</p>
                                                <div class="content-price">
                                                    <span>$499</span>/night
                                                </div>
                                                <div class="content-footer">
                                                    <div class="footer-bed"><i class="fa fa-bed"></i> 2</div>
                                                    <div class="foote-people"><i class="fa fa-user"></i> 4</div>
                                                    <div class="footer-wifi">Free WiFi</div>
                                                    <div class="footer-area">60 sqm</div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 box-content">
                                        <div class="card box-rooms" style="border: none;">
                                            <div class="card-img-top">
                                                <img src="<?php echo $url_path ?>/images/all-8.jpg" alt="" style="width:100%"/>
                                                <div class="link-detail">
                                                    <div class="icon-details">
                                                        <a href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body content">
                                                <div class="content-title">
                                                    <h5><a href="">President double LUXE</a></h5>
                                                </div>
                                                <p class="card-text">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</p>
                                                <div class="content-price">
                                                    <span>$99</span>/night
                                                </div>
                                                <div class="content-footer">
                                                    <div class="footer-bed"><i class="fa fa-bed"></i> 2</div>
                                                    <div class="foote-people"><i class="fa fa-user"></i> 4</div>
                                                    <div class="footer-wifi">Free WiFi</div>
                                                    <div class="footer-area">60 sqm</div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="card box-rooms" style="border: none;">
                                            <div class="card-img-top">
                                                <img src="<?php echo $url_path ?>/images/all-9.jpg" alt="" style="width:100%"/>
                                                <div class="link-detail">
                                                    <div class="icon-details">
                                                        <a href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body content">
                                                <div class="content-title">
                                                    <h5><a href="">Special spa room</a></h5>
                                                </div>
                                                <p class="card-text">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</p>
                                                <div class="content-price">
                                                    <span>$349</span>/night
                                                </div>
                                                <div class="content-footer">
                                                    <div class="footer-bed"><i class="fa fa-bed"></i> 2</div>
                                                    <div class="foote-people"><i class="fa fa-user"></i> 4</div>
                                                    <div class="footer-wifi">Free WiFi</div>
                                                    <div class="footer-area">60 sqm</div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                </div>
                <div class="container tab-pane fade" id="double" style="position: relative; overflow: hidden;transition: height 250ms ease-out 0s;">
                                <div class="row item">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="card box-rooms" style="border: none;">
                                            <div class="card-img-top image">
                                                <a href="">
                                                    <img src="<?php echo $url_path ?>/images/double-1.jpg" alt="" style="width:100%"/>
                                                </a>
                                                <div class="link-detail">
                                                    <div class="icon-details">
                                                        <a href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body content">
                                                <div class="content-title">
                                                    <h5><a href="">Grand super LUX</a></h5>
                                                </div>
                                                <p class="card-text">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</p>
                                                <div class="content-price">
                                                    <span>$319</span>/night
                                                </div>
                                                <div class="content-footer">
                                                    <div class="footer-bed"><i class="fa fa-bed"></i> 2</div>
                                                    <div class="foote-people"><i class="fa fa-user"></i> 4</div>
                                                    <div class="footer-wifi">Free WiFi</div>
                                                    <div class="footer-area">60 sqm</div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 box-content">
                                        <div class="card box-rooms" style="border: none;">
                                            <div class="card-img-top">
                                                <img src="<?php echo $url_path ?>/images/double-2.jpg" alt="" style="width:100%"/>
                                                <div class="link-detail">
                                                    <div class="icon-details">
                                                        <a href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body content">
                                                <div class="content-title">
                                                    <h5><a href="">President double LUXE</a></h5>
                                                </div>
                                                <p class="card-text">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</p>
                                                <div class="content-price">
                                                    <span>$149</span>/night
                                                </div>
                                                <div class="content-footer">
                                                    <div class="footer-bed"><i class="fa fa-bed"></i> 2</div>
                                                    <div class="foote-people"><i class="fa fa-user"></i> 4</div>
                                                    <div class="footer-wifi">Free WiFi</div>
                                                    <div class="footer-area">60 sqm</div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="card box-rooms" style="border: none;">
                                            <div class="card-img-top">
                                                <img src="<?php echo $url_path ?>/images/double-3.jpg" alt="" style="width:100%"/>
                                                <div class="link-detail">
                                                    <div class="icon-details">
                                                        <a href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body content">
                                                <div class="content-title">
                                                    <h5><a href="">Special spa room</a></h5>
                                                </div>
                                                <p class="card-text">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</p>
                                                <div class="content-price">
                                                    <span>$739</span>/night
                                                </div>
                                                <div class="content-footer">
                                                    <div class="footer-bed"><i class="fa fa-bed"></i> 2</div>
                                                    <div class="foote-people"><i class="fa fa-user"></i> 4</div>
                                                    <div class="footer-wifi">Free WiFi</div>
                                                    <div class="footer-area">60 sqm</div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row item">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 box-content">
                                        <div class="card box-rooms" style="border: none;">
                                            <div class="card-img-top">
                                                <img src="<?php echo $url_path ?>/images/double-4.jpg" alt="" style="width:100%"/>
                                                <div class="link-detail">
                                                    <div class="icon-details">
                                                     <a href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body content">
                                                <div class="content-title">
                                                    <h5><a href="">Special spa room</a></h5>
                                                </div>
                                                <p class="card-text">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</p>
                                                <div class="content-price">
                                                    <span>$1.449 </span>/night
                                                </div>
                                                <div class="content-footer">
                                                    <div class="footer-bed"><i class="fa fa-bed"></i> 2</div>
                                                    <div class="foote-people"><i class="fa fa-user"></i> 4</div>
                                                    <div class="footer-wifi">Free WiFi</div>
                                                    <div class="footer-area">60 sqm</div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                </div>
                <div class="container tab-pane fade" id="lux" style="position: relative; overflow: hidden;transition: height 250ms ease-out 0s;">
                                <div class="row item">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="card box-rooms" style="border: none;">
                                            <div class="card-img-top image">
                                                <a href="">
                                                    <img src="<?php echo $url_path ?>/images/luruxy-1.jpg" alt="" style="width:100%"/>
                                                </a>
                                                <div class="link-detail">
                                                    <div class="icon-details">
                                                        <a href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body content">
                                                <div class="content-title">
                                                    <h5><a href="">President double LUXE</a></h5>
                                                </div>
                                                <p class="card-text">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</p>
                                                <div class="content-price">
                                                    <span>$149 </span>/night
                                                </div>
                                                <div class="content-footer">
                                                    <div class="footer-bed"><i class="fa fa-bed"></i> 2</div>
                                                    <div class="foote-people"><i class="fa fa-user"></i> 4</div>
                                                    <div class="footer-wifi">Free WiFi</div>
                                                    <div class="footer-area">60 sqm</div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 box-content">
                                        <div class="card box-rooms" style="border: none;">
                                            <div class="card-img-top">
                                                <img src="<?php echo $url_path ?>/images/luruxy-2.jpg" alt="" style="width:100%"/>
                                                <div class="link-detail">
                                                    <div class="icon-details">
                                                        <a href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body content">
                                                <div class="content-title">
                                                    <h5><a href="">President double LUXE</a></h5>
                                                </div>
                                                <p class="card-text">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</p>
                                                <div class="content-price">
                                                    <span>$109</span>/night
                                                </div>
                                                <div class="content-footer">
                                                    <div class="footer-bed"><i class="fa fa-bed"></i> 2</div>
                                                    <div class="foote-people"><i class="fa fa-user"></i> 4</div>
                                                    <div class="footer-wifi">Free WiFi</div>
                                                    <div class="footer-area">60 sqm</div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="card box-rooms" style="border: none;">
                                            <div class="card-img-top">
                                                <img src="<?php echo $url_path ?>/images/luruxy-3.jpg" alt="" style="width:100%"/>
                                                <div class="link-detail">
                                                    <div class="icon-details">
                                                        <a href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body content">
                                                <div class="content-title">
                                                    <h5><a href="">Grand super LUX</a></h5>
                                                </div>
                                                <p class="card-text">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</p>
                                                <div class="content-price">
                                                    <span>$499</span>/night
                                                </div>
                                                <div class="content-footer">
                                                    <div class="footer-bed"><i class="fa fa-bed"></i> 2</div>
                                                    <div class="foote-people"><i class="fa fa-user"></i> 4</div>
                                                    <div class="footer-wifi">Free WiFi</div>
                                                    <div class="footer-area">60 sqm</div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                </div>
                <div class="container tab-pane fade" id="standard" style="position: relative; overflow: hidden;transition: height 250ms ease-out 0s;">
                                <div class="row item">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="card box-rooms" style="border: none;">
                                            <div class="card-img-top image">
                                                <a href="">
                                                    <img src="<?php echo $url_path ?>/images/standard-1.jpg" alt="" style="width:100%"/>
                                                </a>
                                                <div class="link-detail">
                                                    <div class="icon-details">
                                                        <a href="#">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body content">
                                                <div class="content-title">
                                                    <h5><a href="">Grand super LUX</a></h5>
                                                </div>
                                                <p class="card-text">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</p>
                                                <div class="content-price">
                                                    <span>$49</span>/night
                                                </div>
                                                <div class="content-footer">
                                                    <div class="footer-bed"><i class="fa fa-bed"></i> 2</div>
                                                    <div class="foote-people"><i class="fa fa-user"></i> 4</div>
                                                    <div class="footer-wifi">Free WiFi</div>
                                                    <div class="footer-area">60 sqm</div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 box-content">
                                        <div class="card box-rooms" style="border: none;">
                                            <div class="card-img-top">
                                                <img src="<?php echo $url_path ?>/images/standard-2.jpg" alt="" style="width:100%"/>
                                                <div class="link-detail">
                                                    <div class="icon-details">
                                                        <a href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body content">
                                                <div class="content-title">
                                                    <h5><a href="">Grand super LUX</a></h5>
                                                </div>
                                                <p class="card-text">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</p>
                                                <div class="content-price">
                                                    <span>$319</span>/night
                                                </div>
                                                <div class="content-footer">
                                                    <div class="footer-bed"><i class="fa fa-bed"></i> 2</div>
                                                    <div class="foote-people"><i class="fa fa-user"></i> 4</div>
                                                    <div class="footer-wifi">Free WiFi</div>
                                                    <div class="footer-area">60 sqm</div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="card box-rooms" style="border: none;">
                                            <div class="card-img-top">
                                                <img src="<?php echo $url_path ?>/images/standard-3.jpg" alt="" style="width:100%"/>
                                                <div class="link-detail">
                                                    <div class="icon-details">
                                                        <a href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body content">
                                                <div class="content-title">
                                                    <h5><a href="">Special spa room</a></h5>
                                                </div>
                                                <p class="card-text">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</p>
                                                <div class="content-price">
                                                    <span>$1.449</span>/night
                                                </div>
                                                <div class="content-footer">
                                                    <div class="footer-bed"><i class="fa fa-bed"></i> 2</div>
                                                    <div class="foote-people"><i class="fa fa-user"></i> 4</div>
                                                    <div class="footer-wifi">Free WiFi</div>
                                                    <div class="footer-area">60 sqm</div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row item">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 box-content">
                                        <div class="card box-rooms" style="border: none;">
                                            <div class="card-img-top">
                                                <img src="<?php echo $url_path ?>/images/standard-4.jpg" alt="" style="width:100%"/>
                                                <div class="link-detail">
                                                    <div class="icon-details">
                                                        <a href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body content">
                                                <div class="content-title">
                                                    <h5><a href="">President double LUXE</a></h5>
                                                </div>
                                                <p class="card-text">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</p>
                                                <div class="content-price">
                                                    <span>$99</span>/night
                                                </div>
                                                <div class="content-footer">
                                                    <div class="footer-bed"><i class="fa fa-bed"></i> 2</div>
                                                    <div class="foote-people"><i class="fa fa-user"></i> 4</div>
                                                    <div class="footer-wifi">Free WiFi</div>
                                                    <div class="footer-area">60 sqm</div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                </div>
                <div class="container tab-pane fade" id="economic" style="position: relative; overflow: hidden;transition: height 250ms ease-out 0s;">
                                <div class="row item">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="card box-rooms" style="border: none;">
                                            <div class="card-img-top image">
                                                <a href="">
                                                    <img src="<?php echo $url_path ?>/images/economic-1.jpg" alt="" style="width:100%"/>
                                                </a>
                                                <div class="link-detail">
                                                    <div class="icon-details">
                                                        <a href="#">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body content">
                                                <div class="content-title">
                                                    <h5><a href="">Grand super LUX</a></h5>
                                                </div>
                                                <p class="card-text">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</p>
                                                <div class="content-price">
                                                    <span>$49</span>/night
                                                </div>
                                                <div class="content-footer">
                                                    <div class="footer-bed"><i class="fa fa-bed"></i> 2</div>
                                                    <div class="foote-people"><i class="fa fa-user"></i> 4</div>
                                                    <div class="footer-wifi">Free WiFi</div>
                                                    <div class="footer-area">60 sqm</div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 box-content">
                                        <div class="card box-rooms" style="border: none;">
                                            <div class="card-img-top">
                                                <img src="<?php echo $url_path ?>/images/economic-2.jpg" alt="" style="width:100%"/>
                                                <div class="link-detail">
                                                    <div class="icon-details">
                                                        <a href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body content">
                                                <div class="content-title">
                                                    <h5><a href="">Special spa room</a></h5>
                                                </div>
                                                <p class="card-text">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</p>
                                                <div class="content-price">
                                                    <span>$739</span>/night
                                                </div>
                                                <div class="content-footer">
                                                    <div class="footer-bed"><i class="fa fa-bed"></i> 2</div>
                                                    <div class="foote-people"><i class="fa fa-user"></i> 4</div>
                                                    <div class="footer-wifi">Free WiFi</div>
                                                    <div class="footer-area">60 sqm</div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="card box-rooms" style="border: none;">
                                            <div class="card-img-top">
                                                <img src="<?php echo $url_path ?>/images/economic-3.jpg" alt="" style="width:100%"/>
                                                <div class="link-detail">
                                                    <div class="icon-details">
                                                    <a href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body content">
                                                <div class="content-title">
                                                    <h5><a href="">President double LUXE</a></h5>
                                                </div>
                                                <p class="card-text">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</p>
                                                <div class="content-price">
                                                    <span>$109</span>/night
                                                </div>
                                                <div class="content-footer">
                                                    <div class="footer-bed"><i class="fa fa-bed"></i> 2</div>
                                                    <div class="foote-people"><i class="fa fa-user"></i> 4</div>
                                                    <div class="footer-wifi">Free WiFi</div>
                                                    <div class="footer-area">60 sqm</div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row item">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 box-content">
                                        <div class="card box-rooms" style="border: none;">
                                            <div class="card-img-top">
                                                <img src="<?php echo $url_path ?>/images/economic-4.jpg" alt="" style="width:100%"/>
                                                <div class="link-detail">
                                                    <div class="icon-details">
                                                        <a href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body content">
                                                <div class="content-title">
                                                    <h5><a href="">Special spa room</a></h5>
                                                </div>
                                                <p class="card-text">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</p>
                                                <div class="content-price">
                                                    <span>$349</span>/night
                                                </div>
                                                <div class="content-footer">
                                                    <div class="footer-bed"><i class="fa fa-bed"></i> 2</div>
                                                    <div class="foote-people"><i class="fa fa-user"></i> 4</div>
                                                    <div class="footer-wifi">Free WiFi</div>
                                                    <div class="footer-area">60 sqm</div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                </div>
            </div>
        </div>
    </div>
</div>         

