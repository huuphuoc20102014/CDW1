<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-1282">

            <!--Phan duong dan-->
            <section class="breadcrumbs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="h1">Contacts</h1>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a><i class="fa fa-angle-right"></i></li>
                                <li class="active">Contacts</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <!--Ket thuc duong dan-->
            
            <!--Phan thong tin contact-->
            <section class="contact-block">
                <div class="container">
                    <div class="contact-block_form">
                        <div class="row">
                            <div class="contact-block_info">

                                <div class="col-md-4">
                                    <div class="contact-block_i">
                                        <div class="info_icon">
                                            <i class="fa fa-home"></i>
                                        </div>
                                        <div class="info_txt"><span>455 Martinson, Los Angeles</span></div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="contact-block_i">
                                        <div class="info_icon">
                                            <i class="fa fa-envelope-o"></i>
                                        </div>
                                        <div class="info_txt"><span>support@email.com</span></div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="contact-block_i">
                                        <div class="info_icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="info_txt"><span>8 (043) 567 - 89 - 30</span></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!--Phan contact form-->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h2 class="h2">Drop Us Some Lines...</h2>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1"></div>
                            <div class="col-lg-8 col-md-8 col-sm-11 col-xs-11">
                                <form id="contactForm" name="Message" class="form-horizontal form-wizzard">

                                    <div class="col-lg-4">
                                        <div class="text_cont form-group floating-label-form-group controls">
                                            <input type="text" id="name" placeholder="You Name" required="" data-validation-required-message="Please enter name" class="form-control"><span class="help-block text-danger"></span>
                                        </div>
                                    </div>


                                    <div class="col-lg-4">
                                        <div class="text_cont form-group floating-label-form-group controls">
                                            <input type="email" id="email" placeholder="You Email" required="" data-validation-required-message="Please enter email" class="form-control"><span class="help-block text-danger"></span>
                                        </div>
                                    </div>


                                    <div class="col-lg-4">
                                        <div class="text_cont form-group floating-label-form-group controls">
                                            <input type="tel" id="phone" placeholder="You Phone" required="" data-validation-required-message="Please enter phone number" class="form-control"><span class="help-block text-danger"></span>
                                        </div>
                                    </div>


                                    <div class="col-lg-12">
                                        <div class="text_cont form-group floating-label-form-group controls">
                                            <textarea id="message" cols="40" rows="10" placeholder="Message" required="" data-validation-required-message="Please enter a message." aria-invalid="false" class="form-control"></textarea>
                                            <span class="help-block text-danger"></span>
                                        </div>
                                    </div>


                                    <div class="col-lg-12 text-center">
                                        <button type="submit" class="btn btn-submit">Send Message</button>
                                    </div>

                                </form> 
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Ket thuc phan contact-->

            <!--Phan map-->
            <section class="map">
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1496.3032543984855!2d106.75835658362409!3d10.851615677855207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752797e321f8e9%3A0xb3ff69197b10ec4f!2zVHLGsOG7nW5nIENhbyDEkOG6s25nIEPDtG5nIG5naOG7hyBUaOG7pyDEkOG7qWM!5e0!3m2!1svi!2s!4v1543300933760" style="border:0" allowfullscreen></iframe>
                </div>
            </section>
            <!--End map-->
        </div>         

