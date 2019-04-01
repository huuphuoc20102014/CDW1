<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1315">
    <footer class="wrap-footer">
        <div class="main-footer">
            <div class="wigetized">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div id="text-2" class="widget widget_text">
                                <h4 class="widget-title">Landmark</h4> 
                                <div class="textwidget">
                                    <p>Landmark brings wide range of choice, steadily updated property list and market trend ...</p>
                                    <ul class="contact-info">
                                        <li><i class="fa fa-map-marker"></i>180 St West, New York, USA</li>
                                        <li><i class="fa fa-phone"></i>(+1)-800-555-6789</li>
                                        <li><i class="fa fa-envelope"></i>contact.usa@landmark.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div id="text-3" class="widget widget_text">
                                <h4 class="widget-title">Opening time</h4> 
                                <div class="textwidget">
                                    <ul class="open-info">
                                        <li>Mon - Fri: 8AM - 10PM</li>
                                        <li>Sat: 9AM - 8PM</li>
                                        <li>Sun: Closed</li>
                                        <li>We Work All The Holidays</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clear-item col-md-3 col-sm-6">
                            <div id="nav_menu-2" class="widget widget_nav_menu">
                                <h4 class="widget-title">Useful Link</h4>
                                <div class="linkedin">
                                    <ul class="menu">
                                        <li><a href="#">Terms of Use</a></li>
                                        <li><a href="#">About US</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Contact Support</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">FAQs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="widget widget_rp_property_listing">
                                <h4 class="widget-title">LATEST PROPERTIES</h4>
                                <div class="foot_content row">

                                    <div class="rp-thumbnail col-md-4 col-sm-4 col-xs-4">
                                        <a href="#" title="Loft Above The City">
                                            <img class="rp-thumbnail" src="<?php echo $url_path ?>/images/property6-150x150.jpg" alt="Loft Above The City"> </a>
                                    </div>

                                    <div class="rp-content col-md-8 col-sm-8 col-xs-8">
                                        <span class="property-status">For Rent</span> <div class="item-title">
                                            <a href="#" title="Loft Above The City">
                                                Loft Above The City </a>
                                        </div>
                                        <div class="rp-price"><span class="before-price"></span> 
                                            <span class="amount"><span class="format_price">$</span>&nbsp;84,000</span> 
                                            <span class="after-price">/ month</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="foot_content row">
                                    <div class="rp-thumbnail col-md-4 col-sm-4 col-xs-4">
                                        <a href="#" title="Villa on Hollywood Boulevard">
                                            <img class="rp-thumbnail" src="<?php echo $url_path ?>/images/property5-150x150.jpg" alt="Villa on Hollywood Boulevard"> </a>
                                    </div>
                                    <div class="rp-content col-md-8 col-sm-8 col-xs-8">
                                        <span class="property-status">For Sale</span> <div class="item-title">
                                            <a href="#" title="Villa on Hollywood Boulevard">
                                                Villa on Hollywood Boulevard </a>
                                        </div>
                                        <div class="rp-price"><span class="before-price"></span> 
                                            <span class="amount"><span class="format_price">$</span>&nbsp;395,000</span> 
                                            <span class="after-price"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="foot_content row">
                                    <div class="rp-thumbnail col-md-4 col-sm-4 col-xs-4">
                                        <a href="#">
                                            <img class="rp-thumbnail" src="<?php echo $url_path ?>/images/property4-150x150.jpg" alt="Villa in Melbourne"> </a>
                                    </div>
                                    <div class="rp-content col-md-8 col-sm-8 col-xs-8">
                                        <span class="property-status">For Rent</span> <div class="item-title">
                                            <a href="#" title="Villa in Melbourne">
                                                Villa in Melbourne </a>
                                        </div>
                                        <div class="rp-price"><span class="before-price">From</span> 
                                            <span class="amount"><span class="format_price">$</span>&nbsp;12,000</span> 
                                            <span class="after-price">/ month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CoppyRight -->
        <div class="copyright">
            <div class="bar-content">
                <div class="container">
                    <div class="copyright-content copyright-text">
                        © 2018. Designed with <i class="fa fa-heart text-primary"></i> by NooTheme </div>
                    <div class="copyright-content copyright-social">
                        <div class="widget"> 
                                <div class="icon-bar">
                                    
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="google"><i class="fa fa-google"></i></a>
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
                                    <a href="#" class="skype"><i class="fa fa-skype"></i></a>
                                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a>
                                  
                                </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>