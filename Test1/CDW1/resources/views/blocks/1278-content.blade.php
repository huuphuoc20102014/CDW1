<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<!-- testiomonials -->
        <div class="type-1278">
            <section class="testimonials">
                <div class="container">
                    <div class="title-main"><h2 class="h2">Some Testimonails<span class="title-secondary">People Says About Us</span></h2></div>
                    <div class="owl-carousel">
                        <div class="item">
                            <div class="testimonials-block_i">
                                <div class="testimonials-block_t">Great <span>Service</span></div>
                                <p>Old unsatiable our now but considered travelling impression. 
                                    In excuse hardly summer in basket misery. By rent an part need. At wrong of of water those linen. Needed oppose seemed how all
                                </p>
                            </div>
                            <div class="testimonials-block_user">
                                <div class="user_img"><img src="images/mike.jpg" alt=""/></div>
                                <div class="user_n">Garry Carlson</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-block_i">
                                <div class="testimonials-block_t">Thank You Very Much <span>I Am Happy!</span></div>
                                <p>Certainty listening no no behaviour existence assurance situation is. 
                                    Because add why not esteems amiable him. Interested the unaffected mrs law friendship add principles.
                                </p>
                            </div>
                            <div class="testimonials-block_user">
                                <div class="user_img"><img src="images/mila.png" alt=""/></div>
                                <div class="user_n">Mila Markovna</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
<!-- /testiomonials -->
