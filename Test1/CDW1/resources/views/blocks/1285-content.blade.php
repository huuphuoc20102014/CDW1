<?php
$dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
$path = substr($dir_block, strlen($_SERVER['DOCUMENT_ROOT']));
$url_path = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $path;
?>
<div class="type-1285">
    <div class="not-found">
        <div class="container">
            <div class="title">
                4<span>0</span>4
            </div>
            <div class="slogan">
                Oops, Error!
            </div>
            <div class="desc">
                The page you were looking for could not be found.
            </div>
        </div>
    </div>
</div>