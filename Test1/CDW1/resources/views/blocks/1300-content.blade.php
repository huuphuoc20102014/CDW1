<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1300">
    <div class="container">
        <div class="top row">
            <div class="col-md-6">
                <h2>Latest for Sale</h2>
            </div>
            <div class="col-md-6 button-nex-pre">
                <button class="swiper-button-prev" style="left: 515px;">Prev</button>

                <button class="swiper-button-next">Next</button>
            </div>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image-background">
                        <img src="images/chicago-12-385x258.jpg" alt="chicago" class="img-responsive"/>
                    </div>
                    <div class="info-body">
                        <h3>
                            <a href="#">Gorgeous apartment bay front</a>
                        </h3>
                        <p>13555 S Wentworth Ave, Riverdale, IL 60827, USA</p>
                        <div class="list">
                            <div class="cell">
                                <p>
                                    <span class="h-beds">Beds: 2</span>
                                    <span class="h-baths">Bath: 1</span>
                                    <span class="h-area">Sq Ft: 3780</span>
                                </p>
                                <p>Apartment</p>
                            </div>
                            <div class="detail">
                                <a href="#" class="btn btn-primary"> Details <i class="fa fa-angle-right fa-right"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="item-foot">
                        <div class="item-foot-left">
                            <p class="prop-user-agent"><i class="fa fa-user"></i> <a href="https://houzez01.favethemes.com/agencies/all-american-real-estate/">All American Real Estate</a> </p>
                        </div>

                        <div class="item-foot-right">
                            <p class="prop-date"><i class="fa fa-calendar"></i>3 years ago</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-background">
                        <img src="images/chicago-12-385x258.jpg" alt="chicago" class="img-responsive"/>
                    </div>
                    <div class="info-body">
                        <h3>
                            <a href="#">Gorgeous apartment bay front</a>
                        </h3>
                        <p>13555 S Wentworth Ave, Riverdale, IL 60827, USA</p>
                        <div class="list">
                            <div class="cell">
                                <p>
                                    <span class="h-beds">Beds: 2</span>
                                    <span class="h-baths">Bath: 1</span>
                                    <span class="h-area">Sq Ft: 3780</span>
                                </p>
                                <p>Apartment</p>
                            </div>
                            <div class="detail">
                                <a href="#" class="btn btn-primary"> Details <i class="fa fa-angle-right fa-right"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="item-foot">
                        <div class="item-foot-left">
                            <p class="prop-user-agent"><i class="fa fa-user"></i> <a href="https://houzez01.favethemes.com/agencies/all-american-real-estate/">All American Real Estate</a> </p>
                        </div>

                        <div class="item-foot-right">
                            <p class="prop-date"><i class="fa fa-calendar"></i>3 years ago</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-background">
                        <img src="images/chicago-12-385x258.jpg" alt="chicago" class="img-responsive"/>
                    </div>
                    <div class="info-body">
                        <h3>
                            <a href="#">Gorgeous apartment bay front</a>
                        </h3>
                        <p>13555 S Wentworth Ave, Riverdale, IL 60827, USA</p>
                        <div class="list">
                            <div class="cell">
                                <p>
                                    <span class="h-beds">Beds: 2</span>
                                    <span class="h-baths">Bath: 1</span>
                                    <span class="h-area">Sq Ft: 3780</span>
                                </p>
                                <p>Apartment</p>
                            </div>
                            <div class="detail">
                                <a href="#" class="btn btn-primary"> Details <i class="fa fa-angle-right fa-right"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="item-foot">
                        <div class="item-foot-left">
                            <p class="prop-user-agent"><i class="fa fa-user"></i> <a href="https://houzez01.favethemes.com/agencies/all-american-real-estate/">All American Real Estate</a> </p>
                        </div>

                        <div class="item-foot-right">
                            <p class="prop-date"><i class="fa fa-calendar"></i>3 years ago</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-background">
                        <img src="images/chicago-12-385x258.jpg" alt="chicago" class="img-responsive"/>
                    </div>
                    <div class="info-body">
                        <h3>
                            <a href="#">Gorgeous apartment bay front</a>
                        </h3>
                        <p>13555 S Wentworth Ave, Riverdale, IL 60827, USA</p>
                        <div class="list">
                            <div class="cell">
                                <p>
                                    <span class="h-beds">Beds: 2</span>
                                    <span class="h-baths">Bath: 1</span>
                                    <span class="h-area">Sq Ft: 3780</span>
                                </p>
                                <p>Apartment</p>
                            </div>
                            <div class="detail">
                                <a href="#" class="btn btn-primary"> Details <i class="fa fa-angle-right fa-right"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="item-foot">
                        <div class="item-foot-left">
                            <p class="prop-user-agent"><i class="fa fa-user"></i> <a href="https://houzez01.favethemes.com/agencies/all-american-real-estate/">All American Real Estate</a> </p>
                        </div>

                        <div class="item-foot-right">
                            <p class="prop-date"><i class="fa fa-calendar"></i>3 years ago</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-background">
                        <img src="images/chicago-12-385x258.jpg" alt="chicago" class="img-responsive"/>
                    </div>
                    <div class="info-body">
                        <h3>
                            <a href="#">Gorgeous apartment bay front</a>
                        </h3>
                        <p>13555 S Wentworth Ave, Riverdale, IL 60827, USA</p>
                        <div class="list">
                            <div class="cell">
                                <p>
                                    <span class="h-beds">Beds: 2</span>
                                    <span class="h-baths">Bath: 1</span>
                                    <span class="h-area">Sq Ft: 3780</span>
                                </p>
                                <p>Apartment</p>
                            </div>
                            <div class="detail">
                                <a href="#" class="btn btn-primary"> Details <i class="fa fa-angle-right fa-right"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="item-foot">
                        <div class="item-foot-left">
                            <p class="prop-user-agent"><i class="fa fa-user"></i> <a href="https://houzez01.favethemes.com/agencies/all-american-real-estate/">All American Real Estate</a> </p>
                        </div>

                        <div class="item-foot-right">
                            <p class="prop-date"><i class="fa fa-calendar"></i>3 years ago</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-background">
                        <img src="images/chicago-12-385x258.jpg" alt="chicago" class="img-responsive"/>
                    </div>
                    <div class="info-body">
                        <h3>
                            <a href="#">Gorgeous apartment bay front</a>
                        </h3>
                        <p>13555 S Wentworth Ave, Riverdale, IL 60827, USA</p>
                        <div class="list">
                            <div class="cell">
                                <p>
                                    <span class="h-beds">Beds: 2</span>
                                    <span class="h-baths">Bath: 1</span>
                                    <span class="h-area">Sq Ft: 3780</span>
                                </p>
                                <p>Apartment</p>
                            </div>
                            <div class="detail">
                                <a href="#" class="btn btn-primary"> Details <i class="fa fa-angle-right fa-right"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="item-foot">
                        <div class="item-foot-left">
                            <p class="prop-user-agent"><i class="fa fa-user"></i> <a href="https://houzez01.favethemes.com/agencies/all-american-real-estate/">All American Real Estate</a> </p>
                        </div>

                        <div class="item-foot-right">
                            <p class="prop-date"><i class="fa fa-calendar"></i>3 years ago</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->

        </div>

    </div>  
