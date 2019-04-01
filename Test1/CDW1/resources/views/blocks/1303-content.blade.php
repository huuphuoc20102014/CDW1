<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1303">
    <div class="container">
    <h2 class="pb-3"> CONTACT ME</h2>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-lg-4 col-12">
                <div class="image">
                    <a href="">
                        <img src="<?php echo $url_path ?>/images/1303.jpg" alt="" style="width:50%;border-radius: 50%;"/>
                    </a>
                </div>
                <h2 class="contact-name"> JERRY EDWARDS</h2>
                <div class="info-cantact">
                    <strong>Downtown | Miami</strong>
                    <p class="address">785 West Side Road - Miami, FL 33879</p>
                </div>
                <strong>Real Estate Agent</strong>
                <div class="contact-phone row pt-4">
                    <strong class="col-12">Office: <a style="text-decoration: none;" class="contact" href="tell:789 465 3210">789 465 3210</a></strong>
                    <strong class="col-12">Mobile: <a style="text-decoration: none;" class="contact" href="tell:321 456 9874">321 456 9874</a></strong>
                    <strong class="col-12">Fax: <a style="text-decoration: none;" class="contact" href="tell:897 654 1258">897 654 1258</a></strong>
                    <strong class="col-12">Email: <a style="text-decoration: none;" class="contact" href="mailto:Jerry@houzez.com">Jerry@houzez.com</a></strong>
                </div>
            </div>
            <div class="col-md-8 col-sm-8 col-lg-8 col-12">
                <div class="from">
                    <form >
                        <div class="form-row mt-2">
                            <div class="col-12">
                                <span>Your Name</span>
                                <input type="text" autocomplete="off" class="form-control" name="name" formControlName="name"
                                        placeholder="">
                            </div>
                        </div>
                        <div class="form-row mt-2">
                        <div class="col-12">
                            <span>Your Email</span>
                            <input type="text" autocomplete="off" class="form-control" name="name" formControlName="name"
                                        placeholder="">
                            </div>
                        </div>   
                        <div class="form-row mt-2">
                            <div class="col-12">
                                <span>Subject</span>
                                <input type="text" autocomplete="off" class="form-control" name="name" formControlName="name"
                                        placeholder="">
                            </div>
                        </div>
                        <div class="form-row mt-2">
                            <div class="col-12">
                                <span>Your Message</span>
                            <textarea type="text" autocomplete="off" rows="5" name="message" formControlName="message"
                                    class="form-control p-3 h-4" placeholder=""></textarea>
                            </div>
                        </div> 
                            <!-- <form action="?" method="POST">
                                <div class="g-recaptcha" data-sitekey="your_site_key"></div>
                                <br/>
                                <input type="submit" value="Submit">
                            </form> -->
                        <button type="button" class="btn btn-warning mt-3">Send</button>    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>         

