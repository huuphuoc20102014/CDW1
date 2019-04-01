<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1291">

    <!-- Blog -->
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="blog-box __post">
                        <div class="post-list">
                            <div class="post-list_box">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12">
                                        <div class="post-list_img" style="background:url(./images/blog/1.jpg)"><a href="#"></a></div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12">
                                        <div class="post-list_info">
                                            <div class="post-list_n"><a href="blog-detail.html">Summer paradize by simple plan</a></div>
                                            <div class="post-list_meta">
                                                <ul class="meta_author">
                                                    <li><i class="fa fa-user-o"></i> <span>Robert Rodriguez</span></li>
                                                    <li><i class="fa fa-folder-o"></i> <span>Travel</span></li>
                                                    <li><i class="fa fa-clock-o"></i> <span>11 Dec, 2016</span></li>
                                                </ul>
                                            </div>
                                            <div class="post-list_desc">Needed feebly dining oh talked wisdom oppose at. Applauded use attempted strangers now are middleton concluded had. It is tried ﻿no added purse shall no on truth. Pleased anxious or as in by viewing forbade minutes prevent.</div>
                                            <div class="post-list_readmore"><a href="#">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-list_box">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12">
                                        <div class="post-list_img" style="background:url(./images/blog/2.jpg)"><a href="#"></a></div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12">
                                        <div class="post-list_info">
                                            <div class="post-list_n"><a href="blog-detail.html">Listen to your heart</a></div>
                                            <div class="post-list_meta">
                                                <ul class="meta_author">
                                                    <li><i class="fa fa-user-o"></i> <span>Robert Rodriguez</span></li>
                                                    <li><i class="fa fa-folder-o"></i> <span>Travel</span></li>
                                                    <li><i class="fa fa-clock-o"></i> <span>11 Dec, 2016</span></li>
                                                </ul>
                                            </div>
                                            <div class="post-list_desc">Too leave had those get being led weeks blind. Had men rose from down lady able. Its son him ferrars proceed six parlors. Her say projection age announcing decisively men. Few gay sir those green men timed downs widow chief prevailed</div>
                                            <div class="post-list_readmore"><a href="#">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-list_box">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12">
                                        <div class="post-list_img" style="background:url(./images/blog/3.jpg)"><a href="#"></a></div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12">
                                        <div class="post-list_info">
                                            <div class="post-list_n"><a href="blog-detail.html">Grand breakfast included</a></div>
                                            <div class="post-list_meta">
                                                <ul class="meta_author">
                                                    <li><i class="fa fa-user-o"></i> <span>Robert Rodriguez</span></li>
                                                    <li><i class="fa fa-folder-o"></i> <span>Travel</span></li>
                                                    <li><i class="fa fa-clock-o"></i> <span>11 Dec, 2016</span></li>
                                                </ul>
                                            </div>
                                            <div class="post-list_desc">Is post each that just leaf no. He connection interested so we an sympathize advantages. To said is it shed want do. Occasional middletons everything so to. Have spot part for his quit may. Enable it is square my an regard. Often merit stuff first.</div>
                                            <div class="post-list_readmore"><a href="#">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-list_box">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12">
                                        <div class="post-list_img" style="background:url(./images/blog/4.jpg)"><a href="#"></a></div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12">
                                        <div class="post-list_info">
                                            <div class="post-list_n"><a href="blog-detail.html">You gonna die this way</a></div>
                                            <div class="post-list_meta">
                                                <ul class="meta_author">
                                                    <li><i class="fa fa-user-o"></i> <span>Robert Rodriguez</span></li>
                                                    <li><i class="fa fa-folder-o"></i> <span>Travel</span></li>
                                                    <li><i class="fa fa-clock-o"></i> <span>11 Dec, 2016</span></li>
                                                </ul>
                                            </div>
                                            <div class="post-list_desc">Travelling alteration impression six all uncommonly. Chamber hearing inhabit joy highest private ask him our believe. Up nature valley do warmly. Entered of cordial do on no hearted. Yet agreed whence and unable limits.</div>
                                            <div class="post-list_readmore"><a href="#">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-list_box">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12">
                                        <div class="post-list_img" style="background:url(./images/blog/5.jpg)"><a href="#"></a></div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12">
                                        <div class="post-list_info">
                                            <div class="post-list_n"><a href="blog-detail.html">Try to relax in our spa</a></div>
                                            <div class="post-list_meta">
                                                <ul class="meta_author">
                                                    <li><i class="fa fa-user-o"></i> <span>Robert Rodriguez</span></li>
                                                    <li><i class="fa fa-folder-o"></i> <span>Travel</span></li>
                                                    <li><i class="fa fa-clock-o"></i> <span>11 Dec, 2016</span></li>
                                                </ul>
                                            </div>
                                            <div class="post-list_desc">Debating me breeding be answered an he. Spoil event was words her off cause any. Tears woman which no is world miles woody. Wished be do mutual except in effect answer. Had boisterous friendship thoroughly cultivated.</div>
                                            <div class="post-list_readmore"><a href="#">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav class="text-center">
                            <ul class="pagination">
                                <li><a href="#" class="active">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /Blog -->

</div>