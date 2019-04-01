<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>  

<div class="noo-container-fluid">
    <div class="noo-container">
      <div class="noo-row">
      <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
          <div class="wpb_wrapper">
            <div class="noo-advanced-search-property">
              <div class="noo-theme-wraptext">
                <div class="wrap-title">
                  <h3 class="noo-theme-title">
                    <span class="first-word">
                      Find
                      <span></span>
                    </span>
                    Property
                  </h3>
                  <p class="noo-theme-sub-title">
                    <i class="icon-decotitle"></i>
                  Discover your perfect home with the most complete source of homes for sale. </p>
                </div>
              </div>
              <form class="noo-advanced-search-property-form " action="#" method="post" accept-charset="utf-8">
                <div class="noo-advanced-search-property-wrap">
                  <div class="noo-action-search-top">
                    <button type="submit" class="show-filter-property">
                      We found <b>0</b> results. Do you want to load the results now? 
                    </button>
                    </div>
                    <div class="noo-row noo-box-field">
                      <div id="rp-item-keyword-wrap" class="rp-item-wrap noo-md-3">
                        <input type="text" placeholder="Enter Your Keyword..." name="keyword" id="rp-field-item-keyword" class="rp-field-item-text rp-field-item-keyword" value="" /></div>
                        <div id="rp-item-offers-wrap" class="rp-item-wrap noo-md-3"> <select placeholder="Offers" name="offers" id="rp-field-item-offers" class="rp-field-item-select rp-field-item-offers rp-select">
                        <option value="">
                        All Offers </option>
                        <option value="7">For Rent</option><option value="29">For Sale</option> </select>
                      </div><div id="rp-item-types-wrap" class="rp-item-wrap noo-md-3"> <select placeholder="Listing Types" name="types" id="rp-field-item-types" class="rp-field-item-select rp-field-item-types rp-select">
                        <option value="">
                        All Listing Types </option>
                        <option value="30">Apartment</option><option value="34">Land</option><option value="32">Multi-Family Home</option> </select>
                      </div><div id="rp-item-noo_property_bathrooms-wrap" class="rp-item-wrap noo-md-3"> <select placeholder="Bathrooms" name="noo_property_bathrooms" id="rp-field-item-noo_property_bathrooms" class="rp-field-item-select rp-field-item-noo_property_bathrooms rp-select">
                        <option value="">
                        All Bathrooms </option>
                        <option value="2">2</option><option value="3">3</option><option value="5">5</option> </select>
                      </div><div id="rp-item-noo_property_bedrooms-wrap" class="rp-item-wrap noo-md-3"> <select placeholder="Bedrooms" name="noo_property_bedrooms" id="rp-field-item-noo_property_bedrooms" class="rp-field-item-select rp-field-item-noo_property_bedrooms rp-select">
                        <option value="">
                        All Bedrooms </option>
                        <option value="3">3</option><option value="5">5</option><option value="6">6</option> </select>
                      </div><div id="rp-item-noo_property_garages-wrap" class="rp-item-wrap noo-md-3"> <select placeholder="Garages" name="noo_property_garages" id="rp-field-item-noo_property_garages" class="rp-field-item-select rp-field-item-noo_property_garages rp-select">
                        <option value="">
                        All Garages </option>
                        <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="5">5</option> </select>
                      </div> <div id="rp-item-area-wrap" class="rp-control rp-item-wrap noo-md-3">

                        <div class="rp-area">
                          <div class="area-slider-range"></div>
                          <input type="hidden" name="area_min" class="area_min" data-min="0" value="0" />
                          <input type="hidden" name="area_max" class="area_max" data-max="6666" value="6666" />
                          <div class="area-results">
                            <span class="min-area">
                            0 m2 </span> -
                            <span class="max-area">
                            6666 m2 </span>
                          </div>
                        </div>
                      </div>
                      <div id="rp-item-price-wrap" class="rp-control rp-item-wrap noo-md-3">

                        <div class="rp-price">
                          <div class="price-slider-range"></div>
                          <input type="hidden" name="min_price" class="price_min" data-min="0" value="0">
                          <input type="hidden" name="max_price" class="price_max" data-max="600000" value="600000">
                          <div class="price-results">
                            <span class="min-price">
                              <span class="format_price">$</span>&nbsp;0 </span> -
                              <span class="max-price">
                                <span class="format_price">$</span>&nbsp;600,000 </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="noo-row noo-box-action">
                          <div class="noo-md-9 box-show-features">
                            <span class="show-features">More Filters</span> </div>
                            <div class="noo-md-3 noo-box-button">
                              <button type="submit" class="noo-button">
                                <span class="ion-search"></span>
                              Search Property </button>
                            </div>
                          </div>
                          <div class="noo-row noo-box-features"><div id="box-features5c053e976b2e2" class="noo-md-12 noo-box-features-content"><div id="rp-item-property_featured-wrap" class="rp-item-wrap "> <div class="rp-item-checkbox">
                            <input id="rp-item-noo_propertybasement" type="checkbox" name="noo_propertybasement" value="1" />
                            <label for="rp-item-noo_propertybasement">Basement</label>
                          </div>
                          <div class="rp-item-checkbox">
                            <input id="rp-item-noo_propertyswimming_pool" type="checkbox" name="noo_propertyswimming_pool" value="1" />
                            <label for="rp-item-noo_propertyswimming_pool">Swimming Pool</label>
                          </div>
                          <div class="rp-item-checkbox">
                            <input id="rp-item-noo_propertycooling_system" type="checkbox" name="noo_propertycooling_system" value="1" />
                            <label for="rp-item-noo_propertycooling_system">Cooling system</label>
                          </div>
                          <div class="rp-item-checkbox">
                            <input id="rp-item-noo_propertyfence" type="checkbox" name="noo_propertyfence" value="1" />
                            <label for="rp-item-noo_propertyfence">Fence</label>
                          </div>
                          <div class="rp-item-checkbox">
                            <input id="rp-item-noo_propertygas_heat" type="checkbox" name="noo_propertygas_heat" value="1" />
                            <label for="rp-item-noo_propertygas_heat">Gas Heat</label>
                          </div>
                          <div class="rp-item-checkbox">
                            <input id="rp-item-noo_propertybalcony" type="checkbox" name="noo_propertybalcony" value="1" />
                            <label for="rp-item-noo_propertybalcony">Balcony</label>
                          </div>
                          <div class="rp-item-checkbox">
                            <input id="rp-item-noo_propertycentral_vacuum" type="checkbox" name="noo_propertycentral_vacuum" value="1" />
                            <label for="rp-item-noo_propertycentral_vacuum">Central Vacuum</label>
                          </div>
                          <div class="rp-item-checkbox">
                            <input id="rp-item-noo_propertysecurity_system" type="checkbox" name="noo_propertysecurity_system" value="1" />
                            <label for="rp-item-noo_propertysecurity_system">Security system</label>
                          </div>
                          <div class="rp-item-checkbox">
                            <input id="rp-item-noo_propertycable_tv_available" type="checkbox" name="noo_propertycable_tv_available" value="1" />
                            <label for="rp-item-noo_propertycable_tv_available">Cable TV Available</label>
                          </div>
                          <div class="rp-item-checkbox">
                            <input id="rp-item-noo_propertylake_view" type="checkbox" name="noo_propertylake_view" value="1" />
                            <label for="rp-item-noo_propertylake_view">Lake View</label>
                          </div>
                          <div class="rp-item-checkbox">
                            <input id="rp-item-noo_propertyattic" type="checkbox" name="noo_propertyattic" value="1" />
                            <label for="rp-item-noo_propertyattic">Attic</label>
                          </div>
                          <div class="rp-item-checkbox">
                            <input id="rp-item-noo_propertysolar_heat" type="checkbox" name="noo_propertysolar_heat" value="1" />
                            <label for="rp-item-noo_propertysolar_heat">Solar Heat</label>
                          </div>
                          <div class="rp-item-checkbox">
                            <input id="rp-item-noo_propertygolf_course" type="checkbox" name="noo_propertygolf_course" value="1" />
                            <label for="rp-item-noo_propertygolf_course">Golf course</label>
                          </div>
                          <div class="rp-item-checkbox">
                            <input id="rp-item-noo_propertywet_bar" type="checkbox" name="noo_propertywet_bar" value="1" />
                            <label for="rp-item-noo_propertywet_bar">Wet Bar</label>
                          </div>
                          <div class="rp-item-checkbox">
                            <input id="rp-item-noo_propertybackyard" type="checkbox" name="noo_propertybackyard" value="1" />
                            <label for="rp-item-noo_propertybackyard">Backyard</label>
                          </div>
                          <div class="rp-item-checkbox">
                            <input id="rp-item-noo_propertyskylights" type="checkbox" name="noo_propertyskylights" value="1" />
                            <label for="rp-item-noo_propertyskylights">Skylights</label>
                          </div>
                          <div class="rp-item-checkbox">
                            <input id="rp-item-noo_propertyoffice_den" type="checkbox" name="noo_propertyoffice_den" value="1" />
                            <label for="rp-item-noo_propertyoffice_den">Office/den</label>
                          </div>
                          <div class="rp-item-checkbox">
                            <input id="rp-item-noo_propertyfireplace" type="checkbox" name="noo_propertyfireplace" value="1" />
                            <label for="rp-item-noo_propertyfireplace">Fireplace</label>
                          </div>
                        </div></div></div>
                      </div>
                    </form>       