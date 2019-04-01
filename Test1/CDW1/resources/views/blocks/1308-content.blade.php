<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1308">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="noo-property-box-meta">
            <div class="noo-property-box-meta-content">
                <span class="property-status">For Rent</span>
                <div class="noo-item-head">
                    <h1>
                        <a href="#" title="Store Space Greenville">
                            Store Space Greenville </a>
                    </h1>
                    <span class="location">
                        250-260 3rd St, Hoboken, NJ 07030, USA </span>
                </div>
                <div class="noo-info">
                    <span>
                        <i class="fa fa-university" aria-hidden="true"></i> <span>100 m2</span>
                    </span>
                    <span >
                        <i class="fa fa-bed" aria-hidden="true"></i>
                        <span>5 <span>Bedrooms</span></span>
                    </span>
                    <span class="noo-primary-file-3">
                        <i class="fa fa-university" aria-hidden="true"></i>
                        <span>3 <span >Garages</span></span>
                    </span>
                    <span class="noo-primary-file-4">
                        <i class="fa fa-bed" aria-hidden="true">
                        </i> <span>3 <span>Bathrooms</span></span>
                    </span>
                </div>
               <div class="noo-price">
                    <span></span> <span class="amount"><span>$</span>&nbsp;25,000</span> <span></span> </div>
            </div>
             </div> 
            </div>
        </div>
    </div>       
    </div>
