<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1293">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="comments-block">
                    <h3 class="h3"><span>3</span> Comments</h3>
                    <ul class="media-list">
                        <li class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="avatar-cmt" src="images/mike.jpg" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="heading">Media Heading</h4>
                                <div class="date">Apr 9, 2015, 15:43</div>
                                <div class="content">
                                    <p>Old there any widow law rooms. Agreed but expect repair she nay sir silent person. Direction can dependent one bed situation attempted.</p>
                                </div>

                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="avatar-cmt" src="images/mike.png" alt="">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="heading">Nested Media</h4>
                                        <div class="date">Apr 9, 2015, 15:43</div>
                                        <div class="content">
                                            <p>Old there any widow law rooms. Agreed but expect repair she nay sir silent person. Direction can dependent one bed situation attempted.</p>
                                        </div>

                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="avatar-cmt" src="images/mike.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="heading">Media Heading</h4>
                                                <div class="date">Apr 9, 2015, 15:43</div>
                                                <div class="content">
                                                    <p>Old there any widow law rooms. Agreed but expect repair she nay sir silent person. Direction can dependent one bed situation attempted.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="avatar-cmt" src="images/mila.png" alt="">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="heading">Creative Agency</h4>
                                        <div class="date">Apr 9, 2015, 15:43</div>
                                        <div class="content">
                                            <p>Old there any widow law rooms. Agreed but expect repair she nay sir silent person. Direction can dependent one bed situation attempted.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="comments-form">
                    <form class="form-comment">
                        <h3 class="h3">Leave a comment</h3>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter your name ...">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter your subject ...">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Enter your email ...">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea rows="8" class="form-control" placeholder="Your comment ..."></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Post comment" class="btn btn-default">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>