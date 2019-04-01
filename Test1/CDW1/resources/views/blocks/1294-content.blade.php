<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="type-1294">
                <div class="post-share">
                    <div class="share-left">
                        <strong>Tags:</strong>
                        <a href="#">Hotel</a>
                        <a href="#">Service</a>
                        <a href="#">Money</a>
                    </div>
                    <div class="share-right">
                        <strong>Share:</strong>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>         

