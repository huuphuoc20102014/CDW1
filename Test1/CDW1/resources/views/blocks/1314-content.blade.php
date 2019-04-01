<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>        

        <div class="type-1314">
            <div class="container container-1314">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-footer-post">
                            <div class="single-tag">
                                <span>tags:</span>
                                <a href="#" rel="tag">plan</a>
                                <a href="#" rel="tag">property</a>

                            </div>
                        </div>

                        <div class="section-post-navigation">
                            <div class="previus-post" >
                                <div class="bg-nav"></div>
                                <div class="bg-prev-animate1"></div>
                                <div class="bg-prev-animate2"></div>
                                <a href="#" rel="prev"><span>&lt; previus post</span> <br>Five things you didn’t know about living in the City</a>
                            </div>
                            
                            <div class="next-post">
                                <div class="bg-nav"></div>
                                <div class="bg-next-animate1"></div>
                                <div class="bg-next-animate2"></div>
                                <a href="#" rel="prev"><span>next post &gt;</span> <br>Future office buildings: intelligent by design</a>
                            </div>
                            
                        </div>

                        <div class="section-comment-area">
                            <div class="comment-title">
                                <h3 class="">
                                    <span>leave a comment</span>
                                </h3>
                                
                            </div>

                            <div class="comment-form-area">
                                <form action='#' method='post'>
                                    <div class="row">
                                        <p class="form-1314-author col-md-4 col-sm-4">
                                            <input type="text" name="author" placeholder="Name" value="">
                                        </p>
                                        <p class="form-1314-email col-md-4 col-sm-4">
                                            <input type="text" name="email" placeholder="Email" value="">
                                        </p>
                                        <p class="form-1314-website col-md-4 col-sm-4">
                                            <input type="text" name="website" placeholder="Website" value="">
                                        </p>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12  col-sm-12">
                                            <p class="form-1314-comment">
                                                <textarea name="comment" placeholder="Comment"></textarea>
                                            </p>
                                        </div>
                                        
                                    </div>
                                    
                                    <p class="1314-form-submit">
                                        <input type="hidden" name="comment_post_ID" value="123" id="comment_post_ID">
                                        <button class="submit-button" type="submit" name="submit" id="submit">
                                            Post Comment
                                        </button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

