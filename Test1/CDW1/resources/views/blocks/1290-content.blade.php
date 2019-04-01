<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1290">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12"></div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="content">
                   <div class="form-search">
                        <form action="#" method="POST">
                        <div class="group-search">
                            <input type="text" class="form-search" name="txtSearch" placeholder="Search....">
                            <i class="fa fa-search form-control-search"></i>
                        </div>
                    </form>
                   </div>
                    <div class="last-post">Last posts</div>
                    <ul class="sidebar-lpost-ul">
                        <li class="sidebar-lpost-li">
                            <div class="lpost-img">
                                <img src="images/1.jpg" alt="">
                            </div>
                            <div class="lpost-info">
                                <div class="lpost-t">
                                    <a href="#">Grand super lux</a>
                                </div>
                                <div class="lpost-desc">
                                    At vero eos et accusamus et iusto blanditiis praesentium
                                </div>
                            </div>
                        </li>
                        <li class="sidebar-lpost-li">
                            <div class="lpost-img">
                                <img src="images/2.jpg" alt="">
                            </div>
                            <div class="lpost-info">
                                <div class="lpost-t">
                                    <a href="#">Enjoy new service</a>
                                </div>
                                <div class="lpost-desc">
                                    At vero eos et accusamus et iusto blanditiis praesentium
                                </div>
                            </div>
                        </li>
                        <li class="sidebar-lpost-li">
                            <div class="lpost-img">
                                <img src="images/3.jpg" alt="">
                            </div>
                            <div class="lpost-info">
                                <div class="lpost-t">
                                    <a href="#">Happy weekends</a>
                                </div>
                                <div class="lpost-desc">
                                    At vero eos et accusamus et iusto blanditiis praesentium
                                </div>
                            </div>
                        </li>
                        <li class="sidebar-lpost-li">
                            <div class="lpost-img">
                                <img src="images/4.jpg" alt="">
                            </div>
                            <div class="lpost-info">
                                <div class="lpost-t">
                                    <a href="#">Train – Give It All</a>
                                </div>
                                <div class="lpost-desc">
                                    At vero eos et accusamus et iusto blanditiis praesentium
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="last-post">Popular Tags</div>
                    <ul class="sidebar-tag-ul">
                        <li class="sidebar-tag-li">
                            <a href="#">Design</a>
                        </li>
                        <li class="sidebar-tag-li">
                            <a href="#">Porlfoli</a>
                        </li>
                        <li class="sidebar-tag-li">
                            <a href="#">Digital</a>
                        </li>
                        <li class="sidebar-tag-li">
                            <a href="#">Brending</a>
                        </li>
                        <li class="sidebar-tag-li">
                            <a href="#">Graphic design</a>
                        </li>
                        <li class="sidebar-tag-li">
                            <a href="#">Theme</a>
                        </li>
                        <li class="sidebar-tag-li">
                            <a href="#">Love</a>
                        </li>
                        <li class="sidebar-tag-li">
                            <a href="#">Culture</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

