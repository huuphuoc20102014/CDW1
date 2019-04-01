<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1289">
  <div class="container">
    <div class="row">                                      
      <div class="col-lg-12"><h2 class="h2">Superior Room - Two Bed</h2></div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div id="owl-demo" class="owl-carousel owl-theme">

          <div class="item"><img class="img-responsive" src="./images/1.jpg" alt="image" ></div>
          <div class="item"><img class="img-responsive" src="./images/2.jpg" alt="image"></div>
          <div class="item"><img class="img-responsive" src="./images/3.jpg" alt="image"></div>
          <div class="item"><img class="img-responsive" src="./images/4.jpg" alt="image"></div>
          <div class="item"><img class="img-responsive" src="./images/5.jpg" alt="image"></div>
          <div class="item"><img class="img-responsive" src="./images/6.jpg" alt="image"></div>
          <div class="item"><img class="img-responsive" src="./images/7.jpg" alt="image"></div>
          <div class="item"><img class="img-responsive" src="./images/8.jpg" alt="image"></div> 

        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="room-detail_overview">
          <table class="simple">
            <tr>
              <td><strong>Price:</strong></td>
              <td><span>$ 500</span> / a night</td>
            </tr>
            <tr>
              <td><strong>Room size:</strong></td>
              <td>150 sqm</td>
            </tr>
            <tr>
              <td><strong>Bed:</strong></td>
              <td>2 King Beds</td>
            </tr>
            <tr>
              <td><strong>Max people:</strong></td>
              <td>5 people</td>
            </tr>
            <tr>
              <td><strong>Wi-Fi:</strong></td>
              <td>Avaible</td>
            </tr>
            <tr>
              <td><strong>Room Service:</strong></td>
              <td>Avaible</td>
            </tr>
            <tr>
              <td><strong>Breakfast:</strong></td>
              <td>Included</td>
            </tr>
            <tr>
              <td><strong>Laundry:</strong></td>
              <td>Avaible</td>
            </tr>
            <tr>
              <td><strong>Taxi to Airport:</strong></td>
              <td>Yes</td>
            </tr>
          </table>

        </div>
      </div>
    </div>
  </div>
</div>