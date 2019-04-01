<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class = "type-1281">
    <div class="container">
        <section class="mission">
            <h2 class="h2">Our Mission</h2>
            <div class="row">
                <div class="col-md-6">
                    <ul class="mission_ul">
                        <li>Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus </li>
                        <li>If you have any questiong about our products or something else</li>
                        <li>iStock customers get 15% off 6 or more credits, use the code</li>
                        <li>Cras mattis consectetur purus sit amet fermentum. Etiam porta sem</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="mission_ul">
                        <li>You can c reate various skin to use on color/parallax section easily.</li>
                        <li>This will help you to be able to create various color tone within your site.</li>
                        <li>Nullam id dolor id nibh ultricies vehicula ut id elit.</li>
                        <li>ivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</div>


