<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-1279">
            <div class="container">
                <div class="row">



                    <div class="col-md-4">
                        <div class="footer-top_logo">
                             <a href="#">
                                <img src="images/logo.png" alt="Footer logo"/></a>
                        </div>
                        <div class="footer-top_txt">
                            <p>Continual delighted as elsewhere am convinced unfeeling. Introduced stimulated attachment no by projection. To lady whom my mile sold four need introduced.</p>
                        </div>
                        <div class="footer-top_address">
                            <ul>
                                <li><i class="fa fa-phone"></i> Phone: <span>8 (043) 567 - 89 - 30</span></li>
                                 <li><i class="fa fa-envelope-o"></i> E-mail: <span><a href="mailto:support@email.com">support@email.com</a>
                                  </span></li>
                                <li><i class="fa fa-home"></i> Location: <span>455 Martinson, Los Angeles</span></li>
                            </ul>
                        </div>
                   </div>







            <div class="col-md-4">
                <div class="footer-top_rooms">
                    <ul>
                        <li>
                            <div class="img-footer">
                                <img src="images/1.jpg" alt="">
                                <div class="footer-info">
                                    <a href="#">Grang Super Luxury</a>
                                    <p>3 Bed / Wi-Fi / 2 - Bathroom <span>$119</span></p>
                                </div>
                            </div>

                        </li>
                        <li>
                            <div class="img-footer">
                                <img src="images/2.jpg" alt="">
                                <div class="footer-info">
                                    <a href="#">President Room</a>
                                    <p>4 Bed / Wi-Fi / 3 - Bathroom <span>$329</span></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-footer">
                                <img src="images/3.jpg" alt="">
                                 <div class="footer-info">
                                    <a href="#">Spa Double Room</a>
                                    <p>2 Bed / Wi-Fi / 2 - Bathroom <span>$749</span></p>
                                 </div>
                            </div>
                        </li>
                    </ul>
                 </div>
            </div>




                      <div class="col-md-4">
                           <div class="footer-top_contact_form">
                              <div class="contact_form_t">Contact Form</div>
                              <form action="https://html.dankov-themes.com/deluxhotel/mail.php" method="POST" class="row form-horizontal form-wizzard">
                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                      <input type="text" name="name" class="form-control" placeholder="Name ..."/>
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                       <input type="email" name="email" class="form-control" placeholder="Email ..."/>
                                  </div>
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                      <textarea rows="6" name="message" class="form-control" placeholder="Message ..."></textarea>
                                  </div>
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                                      <input type="submit" value="Send message" class="btn btn-default"/>
                                  </div>
                              </form>
                           </div>
                      </div>
                </div>
                   
                </div>
                   <div class="footer">
                    <div class="container">
                        <div class="footer-left">
                   <span> Copyright © 2016 DeluxHotel. Design by </span><a href="#">DankovThemes</a>
                </div>
                <div class="footer-right">                        
                   <a href="#" class="home">Home</a>
                   <a href="#">Gallery</a> 
                   <a href="#">Blog</a> 
                   <a href="#">Reservation</a>
                   <a href="#">Purchase</a>
                </div>
                    </div>
                
            </div>
            </div>
        </div>         

