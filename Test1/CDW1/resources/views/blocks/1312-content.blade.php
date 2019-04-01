<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
$url_path = $url_path.'/images';
?>
<div class="type-1312">
   <div class="container-fluid columnone">
      <div class="wrapper bg-primary-overlay">
         <div class="testimonial">
            <div class="testimonial-wrap">
               <div class="testimonial-item">
                  <div class="box-user">
                      <img alt="smile-business" width="95" height="95" src="<?php echo $url_path ?>/business-smile1-100x100.png" class="attachment-95x95 size-95x95" />
                     <h3 class="testimonial-name">Tiffany Thompson</h3>
                     <span class="testimonial-position">Web Designer</span> 
                  </div>
                  <p class="testimonial-content">
                     To simply say they were very good at their job would be the grossest of understatements. Their commitment, dedication and enthusiasm to what is at times a difficult task, was superb. In all my years in business I have rarely worked with people who are such true communicators. 
                  </p>
               </div>
               <div class="testimonial-item">
                  <div class="box-user">
                      <img alt="smile-graham" width="95" height="95" src="<?php echo $url_path ?>/Graham_photo-100x100.png" class="attachment-95x95 size-95x95"/>
                     <h3 class="testimonial-name">Chris Hemsworth</h3>
                     <span class="testimonial-position">Manager</span> 
                  </div>
                  <p class="testimonial-content">
                     We chose Landmark over other agencies as you appeared professional and offered a comprehensive communications plan. You lived up to our high expectations at all times and all our dealings with you. 
                  </p>
               </div>
               <div class="testimonial-item">
                  <div class="box-user">
                      <img width="95" height="95" src="<?php echo $url_path ?>/photodune-2567774-happy-businessman-l-100x100.png" class="attachment-95x95 size-95x95" alt="IMG" />
                     <h3 class="testimonial-name">Steven Moore</h3>
                     <span class="testimonial-position">Marketing Executive</span> 
                  </div>
                  <p class="testimonial-content">
                     When we took the tough decision to sell our family home we were keen for you to be in control of the sale as we felt you were the best real estate agent in the area. We had faith in you from the beginning and you certainly lived up to our expectations. 
                  </p>
               </div>
               <div class="testimonial-item">
                  <div class="box-user">
                     <h3 class="testimonial-name">Jessica Chastain</h3>
                     <span class="testimonial-position">Sale Executive</span> 
                  </div>
                  <p class="testimonial-content">
                     We would like to sincerely thank you and the Landmark team for the incredible result you achieved for our family. You have managed to facilitate a purchase of the house we thought could only be a dream, and sell our house for a price beyond our expectations - all within 30 days. 
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="container-fluid columntwo">
      <div class='container'>
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 blog">
               <div class="blog-item">
                  <div class="blog-featured">
                     <div class="content-featured">
                        <div id="plus"></div>
                        <a class="content-thumb" href="#" title="#">
                            <img src="<?php echo $url_path ?>/Los-Angeles-Villa_5-1024x683.jpg" class="attachment-large size-large wp-post-image" alt="IMG"/>
                        </a>
                     </div>
                  </div>
                  <div class="wrap-entry">
                     <header class="entry-header">
                        <h2>
                           <a href="#" title="">Prime Algarve property sees rise in demand</a>
                        </h2>
                        <span class="tag-date">
                        <span>26</span><br>
                        <span>Aug</span>
                        </span>
                        <div class="item-info">
                           <span class="author vcard"><i class="fa fa-user"></i> <a class="url fn n" href="#">Jonathan</a></span> 
                           <span class="post-tag"><i class="fa fa-tag"></i><a href="#" rel="tag">modern living</a>, <a href="#" rel="tag">property</a></span> 
                           <span class="count-comment"><i class="fa fa-comment"></i> 0</span> 
                        </div>
                     </header>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 blog">
               <div class="blog-item">
                  <div class="blog-featured">
                     <div class="content-featured">
                        <div id="plus1"></div>
                        <a class="content-thumb" href="#" title="">
                            <img alt="smile-attachment" src="<?php echo $url_path ?>/Luxury-Mykonos-Villa_8.jpg" class="attachment-large size-large wp-post-image" />
                        </a>
                     </div>
                  </div>
                  <div class="wrap-entry">
                     <header class="entry-header">
                        <h2>
                           <a href="#" title="">Future office buildings: intelligent by design</a>
                        </h2>
                        <span class="tag-date">
                        <span>26</span><br>
                        <span>Aug</span>
                        </span>
                        <div class="item-info">
                           <span class="author vcard"><i class="fa fa-user"></i> <a class="url fn n" href="#">Jonathan</a></span> 
                           <span class="post-tag"><i class="fa fa-tag"></i><a href="#" rel="tag">design</a>, <a href="#" rel="tag">work space</a></span> 
                           <span class="count-comment"><i class="fa fa-comment"></i> 0</span> 
                        </div>
                     </header>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>