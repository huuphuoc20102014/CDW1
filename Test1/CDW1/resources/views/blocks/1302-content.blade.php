<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1302">
   <div class="header-media">
      <div class="banner-inner"></div>
      <div class="banner-caption">
         <h1>Discover your place to live</h1>
         <h2 class="banner-sub-title">Get started in few clicks</h2>
         <!-- from seach-->
         <div class="banner-search-main">
            <form autocomplete="off" method="get" action="#" class="form-inline">
               <div class="form-group">
                  <select class="banner-select">
                     <option value="AllCities">All Cities</option>
                     <option   value="chicago"> Chicago</option>
                     <option   value="los-angeles"> Los Angeles</option>
                     <option   value="miami"> Miami</option>
                     <option   value="new-york"> New York</option>
                  </select>
                  <!-- <div class="btn-group bootstrap-select">
                     <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="All Cities">
                     <span value="0" class="filter-option pull-left">All Cities</span>
                     <span class="fa fa-sort"></span></button>
                     <div class="dropdown-menu open">
                        <ul class="dropdown-menu inner" role="menu">
                           <li data-original-index="0">
                              <a href=""   class="" style="" data-tokens="null">
                              <span value="1" class="text">All Cities</span></span>
                              </a>
                           </li>
                           <li data-original-index="1">
                           <a href=""   class="" style="" data-tokens="null">
                              <span value="2" class="text"> Chicago</span></a>
                           </li>
                           <li data-original-index="2">
                              <a href=""   class="" style="" data-tokens="null">
                              <span value="3" class="text"> Los Angeles</span></a>
                           </li>
                           <li data-original-index="3">
                              <a href=""   class="" style="" data-tokens="null">
                              <span value="4" class="text"> Miami</span></a>
                           </li>
                           <li data-original-index="4">
                               <a href=""   class="" style="" data-tokens="null">
                               <span  value="5" class="text"> New York</span></a>
                           </li>
                        </ul>
                     </div>
                  </div> -->
                  <div class="search input-search input-icon" id="aaa">
                     <input type="text" class="form-control" name="keyword" placeholder="Enter keyword...">
                     <div id="auto_complete_ajax" class="auto-complete"></div>
                  </div>
                  <div class="search-btn">
                     <button class="btn btn-secondary" id="search">Search</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>      