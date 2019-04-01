<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
        
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="type-1292">
                              <div class="post-name">
                                 <a href="#" id="name">Cộng hòa xã hội Summer paradize by simple plan</a>
                              </div>
                              <div class="post-author">
                                  <ul>
                                      <li>
                                          <i class="fa fa-user"></i>
                                          <span id="user-name">Robert Rodriguez</span>
                                      </li>
                                      <li>
                                          <i class="fa fa-folder-o"></i>
                                          <span id="user-address">Travel, Food, Hotel</span>
                                      </li>
                                      <li>
                                          <i class="fa fa-clock-o"></i>
                                          <span id="user-date">11 December, 2016</span>
                                      </li>
                                  </ul>
                              </div> 
                              <div class="post-image">
                                 <img src="images/1292.png" alt="" class="img-responsive">
                              </div>
                              <div class="post-info" id="info">
                                 Over fact all son tell this any his. No insisted confined of weddings to returned to debating rendered. Keeps order fully so do party means young. Table nay him jokes quick. In felicity up to graceful mistaken horrible consider. Abode never think to at. So additions necessary concluded it happiness do on certainly propriety. On in green taken do offer witty of. <br><br>
                                 An so vulgar to on points wanted. Not rapturous resolving continued household northward gay. He it otherwise supported instantly. Unfeeling agreeable suffering it on smallness newspaper be. So come must time no as. Do on unpleasing possession as of unreserved. Yet joy exquisite put sometimes enjoyment perpetual now. Behind lovers eat having length horses vanity say had its. <br><br>
                                 Spoke as as other again ye. Hard on to roof he drew. So sell side ye in mr evil. Longer waited mr of nature seemed. Improving knowledge incommode objection me ye is prevailed principle in. Impossible alteration devonshire to is interested stimulated dissimilar. To matter esteem polite do if. <br><br>
                                 Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may. Wicket do manner others seemed enable rather in. Excellent own discovery unfeeling sweetness questions the gentleman. Chapter shyness matters mr parlors if mention thought. 
                
                              </div>
                              <div class="post-share">
                                 <div class="share-left">
                                    <strong>Tags:</strong>
                                    <a href="#">Hotel</a>
                                    <a href="#">Service</a>
                                    <a href="#">Money</a>
                                 </div>
                                 <div class="share-right">
                                    <strong>Share:</strong>
                                    <a href="#">
                                       <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                       <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                       <i class="fa fa-google-plus"></i>
                                    </a>
                                    <a href="#">
                                       <i class="fa fa-linkedin"></i>
                                    </a>
                                 </div>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>         

