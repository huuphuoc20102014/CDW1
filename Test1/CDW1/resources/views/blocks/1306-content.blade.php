<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1306">
    <div class="container">
        <div class="control-bar">
            <div class="title">Properties</div>
            <div class="sort-properties">
                <p>Sort by: </p>
                <div class="dropdown">
                    <select name="select" class="dropdown-select">
                        <option value="">Default Order</option>
                        <option  value="">Price (Low to High)</option>
                        <option  value="">Price (High to Low)</option>
                        <option  value="">Featured First</option>
                        <option  value="">Date Old to New</option>
                        <option selected value="">Date New to Old</option>
                    </select>
                </div>
                <div class="view-styles">
                    <span class="view-btn"><i class="fa fa-th-list"></i></span>
                    <span class="view-btn"><i class="fa fa-th-large"></i></span>

                    <span class="view-btn active"><i class="fa fa-th"></i></span>
                </div>
                
            </div>
        </div>
        <div class="row">                                      
            <div class="col-md-4  col-xs-12 col-sm-6">
                <div class="item-wrap">
                    <div class="item-top">
                        <div class="label-status">
                            <a href="#">For rent</a>
                        </div>
                        <img src="images/15-380x280.jpg" alt="img-wrap1" class="img-responsive">

                        <div class="item-price-block">
                            <span class="item-price">$21,000</span>
                            <span class="item-sub-price">$6,000/mo</span>                
                        </div>

                        <ul class="actions">
                            <li>
                                <span  data-toggle="tooltip" data-placement="top" title="Favorite">
                                    <i class="fa fa-heart-o"></i>
                                </span>
                            </li>
                            <li>
                                <span data-toggle="tooltip" data-placement="top" title="(8) Photos">
                                    <i class="fa fa-camera"></i>
                                </span>
                            </li>
                            <li>
                                <span data-toggle="tooltip" data-placement="top" title="Compare">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </li>
                        </ul>
                    </div>

                    <div class="item-body">
                        <div class="item-body-top">
                            <div class="item-title">
                                <h2>
                                    <a href="#">Gorgeous Villa Bay View</a>
                                </h2>
                                <address class="property-address">Hollywood Blvd</address>                
                            </div>
                        </div>
                        <div class="item-body-bottom">
                            <ul class="item-amenities">
                                <li ><span>4</span>Bedrooms</li>
                                <li ><span>2</span>Bathrooms</li>
                                <li class="h-area"><span>1200</span>Sq Ft</li>
                            </ul>
                            <ul class="item-date">
                                <li>
                                    <i class="fa fa-user"></i>
                                    <a href="#">Brittany Watkins</a> 
                                </li>
                                <li>
                                    <i class="fa fa-calendar"></i>
                                    3 years ago
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-6">
                <div class="item-wrap">
                    <div class="item-top">
                        <div class="label-status">
                            <a href="#">For sale</a>
                        </div>
                        <img src="images/34-380x280.jpg" alt="img-wrap1" class="img-responsive">

                        <div class="item-price-block">
                            <span class="item-price">$5,700,000</span>
                            <span class="item-sub-price">$2,700&#47;sq ft</span>                
                        </div>

                        <ul class="actions">
                            <li>
                                <span  data-toggle="tooltip" data-placement="top" title="Favorite">
                                    <i class="fa fa-heart-o"></i>
                                </span>
                            </li>
                            <li>
                                <span data-toggle="tooltip" data-placement="top" title="(8) Photos">
                                    <i class="fa fa-camera"></i>
                                </span>
                            </li>
                            <li>
                                <span data-toggle="tooltip" data-placement="top" title="Compare">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="item-body">
                        <div class="item-body-top">
                            <div class="item-title">
                                <h2>
                                    <a href="#">Awesome Historic Home</a>
                                </h2>
                                <address class="property-address">Miramonte Blvd</address>                
                            </div>
                        </div>
                        <div class="item-body-bottom">
                            <ul class="item-amenities">
                                <li ><span>4</span>Bedrooms</li>
                                <li ><span>2</span>Bathrooms</li>
                                <li class="h-area"><span>1200</span>Sq Ft</li>
                            </ul>
                            <ul class="item-date">
                                <li>
                                    <i class="fa fa-user"></i>
                                    <a href="#">Brittany Watkins</a> 
                                </li>
                                <li>
                                    <i class="fa fa-calendar"></i>
                                    3 years ago
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>             
            </div>
            <div class="col-md-4 col-xs-12 col-sm-6">
                <div class="item-wrap">
                    <div class="item-top">
                        <div class="label-status">
                            <a href="#">For sale</a>
                        </div>
                        <img src="images/31-380x280.jpg" alt="img-wrap1" class="img-responsive">

                        <div class="item-price-block">
                            <span class="item-price">$3,500,000</span>
                            <span class="item-sub-price">$1,800&#47;sq ft</span>                
                        </div>

                        <ul class="actions">
                            <li>
                                <span  data-toggle="tooltip" data-placement="top" title="Favorite">
                                    <i class="fa fa-heart-o"></i>
                                </span>
                            </li>
                            <li>
                                <span data-toggle="tooltip" data-placement="top" title="(8) Photos">
                                    <i class="fa fa-camera"></i>
                                </span>
                            </li>
                            <li>
                                <span data-toggle="tooltip" data-placement="top" title="Compare">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </li>
                        </ul>
                    </div>

                    <div class="item-body">
                        <div class="item-body-top">
                            <div class="item-title">
                                <h2>
                                    <a href="#">Beautiful Home For Sale</a>
                                </h2>
                                <address class="property-address">S Central Ave</address>                
                            </div>
                        </div>
                        <div class="item-body-bottom">
                            <ul class="item-amenities">
                                <li ><span>4</span>Bedrooms</li>
                                <li ><span>2</span>Bathrooms</li>
                                <li class="h-area"><span>1200</span>Sq Ft</li>
                            </ul>
                            <ul class="item-date">
                                <li>
                                    <i class="fa fa-user"></i>
                                    <a href="#">Brittany Watkins</a> 
                                </li>
                                <li>
                                    <i class="fa fa-calendar"></i>
                                    3 years ago
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>       
            </div>

        </div>
    </div>
</div>         

