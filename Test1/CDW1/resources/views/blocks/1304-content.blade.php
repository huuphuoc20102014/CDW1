<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>

<script>
$(document).ready(function(){
    $("button").click(function(){
        $(".adv").toggle();
    });
});


  </script>
        <div class="type-1304">
            <div class="container">
                <div class="row">    

                  <div class="col-md-6"> 
   <input type="text" id="keyword" class="form-control" value="" name="keyword" placeholder="Enter an address, town, street, zip or property ID">       
                                               
                   </div>       
 <div class="col-md-6">

        <div class="col-md-3">
                     
                     <div class="btn-group bootstrap-select">
                        <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="All Cities">
                            <span class="filter-option ">All Cities</span>&nbsp;
                            <span class="fa fa-sort"></span></button>
                        <div class="dropdown-menu open">
                            <ul class="dropdown-menu inner " role="menu">
                        <li data-original-index="0">
                            <a tabindex="0" class="" style="" data-tokens="null"><span class="text">All Cities</span> </a></li>
                        <li data-original-index="1">
                            <a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Chicago</span></a></li>
                        <li data-original-index="2">
                            <a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Los Angeles</span>
                                </a></li>
                        <li data-original-index="3">
                            <a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Miami</span></a></li>
                        <li data-original-index="4">

                            <a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Nassau</span></a></li>
                        <li data-original-index="5">
                            <a tabindex="0" class="" style="" data-tokens="null"><span class="text"> New York</span></a></li>
                             </ul>
                         </div>
                         

                 </div>
             </div>
                 <div class="col-md-3">
                     <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="All Areas">
                            <span class="filter-option ">All Areas</span>&nbsp;
                            <span class="fa fa-sort"></span></button>
                        <div class="dropdown-menu open">
                            <ul class="dropdown-menu inner" role="menu">
                        <li data-original-index="0">
                            <a tabindex="0" class="" style="" data-tokens="null"><span class="text">All Areas</span> </a></li>
                        </ul>   
                 </div>
             </div>

                 <div class="col-md-3">
                
                        <button class="advance-btn blue btn advanced" type="button" d="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-gear">&nbsp;</i>Advanced</button>
 
         </div>
                 
                 <div class="col-md-3">
                     
                      <button class=" blue btn search" type="button" >Search</button>
                 </div>
             </div>
         </div>
         <div class="adv">
<div class="col-md-3">
    <div class="btn-group bootstrap-select">
                        <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="All Status">
                            <span class="filter-option ">All Status</span></button>
                        <div class="dropdown-menu open">
                            <ul class="dropdown-menu inner " role="menu">
                        <li data-original-index="0">
                            <a tabindex="0" class="" style="" data-tokens="null"><span class="text"> For Rent</span> </a></li>
                        <li data-original-index="1">
                            <a tabindex="0" class="" style="" data-tokens="null"><span class="text">  For Sale</span></a></li>
                        <li data-original-index="2">
                            <a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Foreclosures</span>
                                </a></li>
                        <li data-original-index="3">
                            <a tabindex="0" class="" style="" data-tokens="null"><span class="text">  New Costruction</span></a></li>
                        <li data-original-index="4">

                            <a tabindex="0" class="" style="" data-tokens="null"><span class="text">  New Listing</span></a></li>
                        <li data-original-index="5">
                            <a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Open House</span></a></li>
                            <li data-original-index="6">
                            <a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Reduced Price</span></a></li>
                            <li data-original-index="7">
                            <a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Resale</span></a></li>
                             </ul>
                         </div>
                         

                 </div>
</div>  
<div class="col-md-3">
    <div class="btn-group bootstrap-select">
                        <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="All Types">
                            <span class="filter-option ">All Types</span></button>
                            <div class="dropdown-menu open">
                            <ul class="dropdown-menu inner " role="menu">
                        <li data-original-index="0">
                            <a tabindex="0" class="" style="" data-tokens="null"><span class="text">All Types</span> </a></li>
                        <li data-original-index="1">
                            <a tabindex="0" class="" style="" data-tokens="null"><span class="text">  Equestrian/span></a></li>
                        <li data-original-index="2">
                            <a tabindex="0" class="" style="" data-tokens="null"><span class="text">  Historic  </span>
                                </a></li>
                        <li data-original-index="3">
                            <a tabindex="0" class="" style="" data-tokens="null"><span class="text">   Waterfront</span></a></li>
                        </ul>

                 </div></div>  
             </div>
<div class="col-md-3">
    <div class="btn-group bootstrap-select">
                        <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="All Labels">
                            <span class="filter-option ">All Labels</span></button>
                        
                 </div>
</div>  
<div class="col-md-3"><input type="text"  class="form-control" placeholder="Property ID">  </div>  

</div>
</div>  
<div class="adv container">
    <div class="col-md-3">
    <div class="btn-group bootstrap-select">
                        <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="All Beds">
                            <span class="filter-option ">All Beds</span></button>

                 </div>
</div>  
<div class="col-md-3">
    <div class="btn-group bootstrap-select">
                        <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="All Baths">
                            <span class="filter-option ">All Baths</span></button>
                        
                         

                 </div>

   </div>  
 
 <div class="col-md-3"><input type="text"  class="form-control" placeholder="Min Areas (sqft)"></div>
  <div class="col-md-3"><input type="text"  class="form-control" placeholder="Max Areas (sqft)"></div>

<div class="col-md-6"></div>
<div class="col-md-6">
      <div data-role="rangeslider">
        <h4>Prices Range: From $1,000 to $50,000,000</h4>
        <input type="range" name="price" id="price" value="1000" min="0" max="50000000">
 
      </div>
    </div>
  
    </div> 

</div>


    
