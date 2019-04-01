<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1287">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="list-details">
                    <h3 class="h3">Available rooms on specified date</h3>
                    <div class="row list-member">
                        <div class="col-md-4 col-sm-6 col-xs-12 best-room_li">
                            <div class="list-img">
                                <a href="#"><img src="images/1.jpg" alt=""/></a>
                                <div class="list-button">
                                    <div class="overlay_btn"><a class="btn btn-default" href="#">SELECT</a></div>
                                </div>
                            </div>
                            <div class="list-info">
                                <div class="title-member-list"><a href="#">Grand super LUX</a></div>
                                <div class="info-member-list">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</div>
                                <div class="price-member-list">
                                    <span>$49</span> / night
                                </div>
                                <div class="list-footer">
                                    <div class="list-footer-member first"><i class="fa fa-bed"></i> 2</div>
                                    <div class="list-footer-member second"><i class="fa fa-user"></i> 4</div>
                                    <div class="list-footer-member third">Free WiFi</div>
                                    <div class="list-footer-member four">60 sqm</div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 best-room_li">
                            <div class="list-img">
                                <a href="#"><img src="images/2.jpg" alt=""/></a>
                                <div class="list-button">
                                    <div class="overlay_btn"><a class="btn btn-default" href="#">SELECT</a></div>
                                </div>
                            </div>
                            <div class="list-info">
                                <div class="title-member-list"><a href="#">Special spa room</a></div>
                                <div class="info-member-list">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</div>
                                <div class="price-member-list">
                                    <span>$49</span> / night
                                </div>
                                <div class="list-footer">
                                    <div class="list-footer-member first"><i class="fa fa-bed"></i> 2</div>
                                    <div class="list-footer-member second"><i class="fa fa-user"></i> 4</div>
                                    <div class="list-footer-member third">Free WiFi</div>
                                    <div class="list-footer-member four">60 sqm</div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 best-room_li">
                            <div class="list-img">
                                <a href="#"><img src="images/3.jpg" alt=""/></a>
                                <div class="list-button">
                                    <div class="overlay_btn"><a class="btn btn-default" href="#">SELECT</a></div>
                                </div>
                            </div>
                            <div class="list-info">
                                <div class="title-member-list"><a href="#">President double LUXE</a></div>
                                <div class="info-member-list">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</div>
                                <div class="price-member-list">
                                    <span>$49</span> / night
                                </div>
                                <div class="list-footer">
                                    <div class="list-footer-member first"><i class="fa fa-bed"></i> 2</div>
                                    <div class="list-footer-member second"><i class="fa fa-user"></i> 4</div>
                                    <div class="list-footer-member third">Free WiFi</div>
                                    <div class="list-footer-member four">60 sqm</div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 best-room_li">
                            <div class="list-img">
                                <a href="#"><img src="images/1.jpg" alt=""/></a>
                                <div class="list-button">
                                    <div class="overlay_btn"><a class="btn btn-default" href="#">SELECT</a></div>
                                </div>
                            </div>
                            <div class="list-info">
                                <div class="title-member-list"><a href="#">Grand super LUX</a></div>
                                <div class="info-member-list">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</div>
                                <div class="price-member-list">
                                    <span>$49</span> / night
                                </div>
                                <div class="list-footer">
                                    <div class="list-footer-member first"><i class="fa fa-bed"></i> 2</div>
                                    <div class="list-footer-member second"><i class="fa fa-user"></i> 4</div>
                                    <div class="list-footer-member third">Free WiFi</div>
                                    <div class="list-footer-member four">60 sqm</div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 best-room_li">
                            <div class="list-img">
                                <a href="#"><img src="images/2.jpg" alt=""/></a>
                                <div class="list-button">
                                    <div class="overlay_btn"><a class="btn btn-default" href="#">SELECT</a></div>
                                </div>
                            </div>
                            <div class="list-info">
                                <div class="title-member-list"><a href="#">Special spa room</a></div>
                                <div class="info-member-list">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</div>
                                <div class="price-member-list">
                                    <span>$49</span> / night
                                </div>
                                <div class="list-footer">
                                    <div class="list-footer-member first"><i class="fa fa-bed"></i> 2</div>
                                    <div class="list-footer-member second"><i class="fa fa-user"></i> 4</div>
                                    <div class="list-footer-member third">Free WiFi</div>
                                    <div class="list-footer-member four">60 sqm</div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 best-room_li">
                            <div class="list-img">
                                <a href="#"><img src="images/3.jpg" alt=""/></a>
                                <div class="list-button">
                                    <div class="overlay_btn"><a class="btn btn-default" href="#">SELECT</a></div>
                                </div>
                            </div>
                            <div class="list-info">
                                <div class="title-member-list"><a href="#">President double LUXE</a></div>
                                <div class="info-member-list">Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable. Education affection consulted by mr attending he therefore.</div>
                                <div class="price-member-list">
                                    <span>$49</span> / night
                                </div>
                                <div class="list-footer">
                                    <div class="list-footer-member first"><i class="fa fa-bed"></i> 2</div>
                                    <div class="list-footer-member second"><i class="fa fa-user"></i> 4</div>
                                    <div class="list-footer-member third">Free WiFi</div>
                                    <div class="list-footer-member four">60 sqm</div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="text-center">
                <div class="list-page">
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">&raquo;</a>
                </div>
            </div>
        </div>
    </div>
</div>