<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>

<footer class="type-1299">
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget-top">
                        <h3>About Site</h3>
                    </div>
                    <div class="widget-body">
                        <p>Houzez is a premium WordPress theme for real estate where modern aesthetics are combined with tasteful simplicity..</p>
                        <p><a href="#">Read more <i class="fa fa-caret-right"></i></a></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget-top">
                        <h3>Contact Us</h3>
                    </div>
                    <div class="widget-body">
                        <ul class="list-unstyled">
                            <li><i class="fa fa-location-arrow"></i>774 NE 84th St Miami, FL 33879</li>
        
                            <li><i class="fa fa-phone"></i> Call us FREE +1 (800) 990 8877</li>
        
                                <li><i class="fa fa-fax"></i> +1 (800) 990 8877</li>
        
                            <li><i class="fa fa-envelope-o"></i> <a href="#">email@email.com</a></li>
                        </ul>

                        <p class="read"><a href="#">Contact us <i class="fa fa-caret-right"></i></a></p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="widget-top">
                        <h3 class="widget-title">Newsletter</h3>
                    </div>
                    <div class="widget-body">
                        <div class="input-email">
                            <form action="" method="POST" role="form">
                                <div class="form-group">
                                    <input class="form-control" id="" type="email" name="EMAIL" placeholder="Enter your email">
                                     <i class="fa fa-envelope"></i>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                        </div>
                        <p class="">Houzez is a premium WordPress theme for real estate agents. <br>
                        Don’t forget to fullow us on:</p>
                        <ul class="social">
                          <li class="active">
                            <a href="#" class="btn-facebook"><i class="fa fa-facebook-square"></i></a>
                          </li>
                          <li>
                            <a href="#" class="btn-twitter"><i class="fa fa-twitter-square"></i></a>
                          </li>
                          <li>
                            <a href="#" class="btn-google-plus"><i class="fa fa-google-plus-square"></i></a>
                          </li>
                          <li>
                            <a href="#" class="btn-linkedin"><i class="fa fa-linkedin-square"></i></a>
                          </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="footer-col">
                            <p>Houzez - All rights reserved</p>
                        </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="footer-col">
                        <ul id="footer-menu">
                            <li><a href="#">Privacy</a></li>
                            <li ><a href="#">Terms and Conditions</a></li>
                            <li ><a href="#">Contact</a></li>
                        </ul>                    
                    </div>   
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="footer-col col">
                        <span>Follow us </span>
                        <a href="#"><i class="fa fa-facebook-square"></i></a>
                            
                        <a href="#"><i class="fa fa-twitter-square"></i></a>

                        <a href="#"><i class="fa fa-linkedin-square"></i></a>

                        <a href="#"><i class="fa fa-google-plus-square"></i></a>

                        <a href="#"><i class="fa fa-instagram"></i></a> 
                     
                    </div>
                </div> 
            </div>
        </div>
    </div>
</footer>   

