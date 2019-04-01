<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1311">
    <div class="container">

        <div class="our-left">
            <h1 class="oul">OUR</span</h1><h1 class="oul1">AGENT</h1>
            <p>Experienced agents with local expertise to help sell your home.</p>
        </div>
        <div class="our-right">
            <a href="#"><i class="fa fa-angle-left" ></i></a>
             <a href="#"><i class="fa fa-angle-right" ></i></a>
        </div>

        <div class="slide-show">
            <div class="row">
                
                <div class="col-md-3" >
                    <div class="img1">
                        <a href="#">
                            <img src="../1311/images/3.png" alt="1" stt="1" class="img-responsive">
                        </a>                    
                    </div>
                    <div class="img-text">

                        <h4 class="name">
                            <a href="#">SARAH BARABOVA </a>
                        </h4>
                        <span class="position">Buying Agent</span>   
                        <div class="social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter-square"></i></a>
                            <a href="#"><i class="fa fa-google"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 test" >
                    <div class="img1">
                        <a href="#">
                            <img src="../1311/images/6.png" alt="2" class="img-responsive">
                        </a>     
                    </div>
                    <div class="img-text">
                        <h4 class="name">
                            <a href="#">BARACK OCEAN </a>
                        </h4>
                        <span class="position">Sales Executive</span>   
                        <div class="social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter-square"></i></a>
                            <a href="#"><i class="fa fa-google"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 test" >
                    <div class="img1">
                        <a href="#">
                            <img src="../1311/images/1.png" alt="3" class="img-responsive">
                        </a>                    
                    </div>
                    <div class="img-text">
                        <h4 class="name">
                            <a href="#">JOHNNY SANDERS </a>
                        </h4>
                        <span class="position">Real Estate Broker</span>   
                        <div class="social">
                            <a href="#"><i class="fa fa-facebook" id="fb"></i></a>
                            <a href="#"><i class="fa fa-twitter-square" id="tw"></i></a>
                            <a href="#"><i class="fa fa-google" id="gg"></i></a>
                            <a href="#"><i class="fa fa-pinterest" id="pi"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 test" >
                    <div class="img1">
                        <a href="#">
                            <img src="../1311/images/4.png" alt="4" class="img-responsive">
                        </a>                    
                    </div>
                    <div class="img-text">
                        <h4 class="name">
                            <a href="#">RICHARD MOORE </a>
                        </h4>
                        <span class="position">Selling Agent</span>   
                        <div class="social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter-square"></i></a>
                            <a href="#"><i class="fa fa-google"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>   

</div>
</div>

