<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-1305">
            <div class="container">
                <div class="row">
                    <div class="framesearch">
                        <div class="titleframesearch">
                            <h3><i class="fa fa-user-o" aria-hidden="true"></i> Book Your Location</h3>

                        </div>
                        <div class="tabcontent">
                            <div class="tabsframesearch">
                                <ul>
                                    <li>
                                        <a class="active" href="#">All</a>
                                    </li>
                                    <li>
                                        <a href="#">Rent</a>
                                    </li>
                                    <li>
                                        <a href="#">Sale</a>
                                    </li>
                                </ul>
                                
                            </div>
                            <div class="tabsframecontent">
                                <form action="#" method="post">
                                    <input type="hidden" name="searchby" value="default">
                                    <!-- Type -->
                                    <div class="typemode medium-module">
                                        <label>Type</label>
                                        <div class="selection-box">
                                            <select name="ptype">
                                                <option value="0">Property Type</option>
                                                <option value="83">Apartment</option>
                                                <option value="62">Building Area</option>
                                                <option value="67">Commercial</option>
                                                <option value="48">Condo</option>
                                                <option value="81">Cottage</option>
                                                <option value="57">Factory</option>
                                                <option value="52">Farm House</option>
                                                <option value="40">Guest House</option>
                                                <option value="84">Office</option>
                                                <option value="60">Residential</option>
                                                <option value="73">Restaurant</option>
                                                <option value="45">Shopping Mall</option>
                                                <option value="66">Show Rooms</option>
                                                <option value="55">Single Family</option>
                                                <option value="72">Vacant Land</option>
                                                <option value="80">Villa</option>
                                                <option value="71">Warehouse</option>
                                            </select>
                                        </div>                  
                                    </div>
                                    <!-- Location -->
                                    <div class="locationmode medium-module">
                                        <label>Locations</label>
                                        <div class="selection-box">
                                            <select name="plocation">
                                                <option value="0">Location</option>
                                                <option value="32">Adelaide</option>
                                                <option value="51">Auckland</option>
                                                <option value="65">Calgary</option>
                                                <option value="68">Cessnock</option>
                                                <option value="63">Dubbo</option>
                                                <option value="59">Helsinki</option>
                                                <option value="64">Melbourne</option>
                                                <option value="58">Perth</option>
                                                <option value="56">Sydney</option>
                                                <option value="69">Toronto</option>
                                                <option value="70">Vienna</option>
                                                <option value="53">Wellington</option>
                                            </select>
                                        </div>                  
                                    </div>

                                    <!-- Minprice -->
                                    <div class="minpricemode medium-module">
                                        <label>Min Price</label>
                                        <div class="selection-box">
                                            <select name="minprice">
                                                <option value="0">Any</option>
                                                <option value="1000">1000</option>
                                                <option value="2000">2000</option>
                                                <option value="3000">3000</option>
                                                <option value="4000">4000</option>
                                            </select>
                                        </div>                  
                                    </div>


                                    <!-- Max Price -->
                                    <div class="maxpricemode medium-module">
                                        <label>Max Price</label>
                                        <div class="selection-box">
                                           <select name="maxprice">
                                                <option value="0">Any</option>
                                                <option value="10000">10000</option>
                                                <option value="20000">20000</option>
                                                <option value="30000">30000</option>
                                                <option value="40000">40000</option>
                                            </select>
                                        </div>                  
                                    </div>
                                    
                                    <!-- Beds -->
                                    <div class="bedsmode small-module">
                                        <label>Beds</label>
                                        <div class="selection-box">
                                            <select name="pbeds">
                                                <option value=">0">Any</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>                  
                                    </div>
                                    
                                    <!-- Baths -->
                                    <div class="Bathsmode small-module">
                                        <label>Baths</label>
                                        <div class="selection-box">
                                            <select name="pbaths">
                                                <option value=">0">Any</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>                  
                                    </div>

                                    <!-- Floors -->
                                    <div class="Floorsmode small-module">
                                        <label>Floors</label>
                                        <div class="selection-box">
                                            <select name="pfloors">
                                                <option value=">0">Any</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>                  
                                    </div>

                                    <!-- Garages -->
                                    <div class="garagesmode small-module">
                                        <label>Garages</label>
                                        <div class="selection-box">
                                            <select name="pgarages">
                                                <option value=">0">Any</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>                  
                                    </div>

                                    <!-- Builders -->
                                    <div class="buildersmode medium-module">
                                        <label>Builders</label>
                                        <div class="selection-box">
                                            <select name="dt_properties-field-1">
                                                <option value="">Any</option>
                                                <option value="KR Builders">KR Builders</option>
                                                <option value="Western Builders &amp; Promoters">Western Builders &amp; Promoters</option>
                                                <option value="AGS Housing Pvt Ltd">AGS Housing Pvt Ltd</option><option value="Classic Builders">Classic Builders</option>
                                                <option value="Modern Constructions">Modern Constructions</option>
                                            </select>
                                        </div>                  
                                    </div>


                                    <!-- Area(sq.ft.) -->
                                    <div class="areamode medium-module">
                                        <label>Area(sq.ft.)</label>
                                        <input type="text" name="dt_properties-field-2" value="">                 
                                    </div>

                                    <!-- Amenities -->
                                    <div class="amenitiesmode large-module">
                                        <label>Amenities</label><br>
                                        <input type="checkbox" name="dt_properties-field-3-field-option-1" value="Modular Kitchens">Modular Kitchens
                                        <input type="checkbox" name="dt_properties-field-3-field-option-2" value="Lifts">Lifts
                                        <input type="checkbox" name="dt_properties-field-3-field-option-3" value="Power Backup">Power Backup
                                        <input type="checkbox" name="dt_properties-field-3-field-option-4" value="Nearby Airport">Nearby Airport              
                                    </div>
                                    <input type="submit" name="dt-propery-search-submit" value="Search">
            
                                </form>
                            </div>
                            <div class="tabsframecontent">
                                <form action="#" method="post">
                                    <input type="hidden" name="searchby" value="default">
                                    <!-- Type -->
                                    <div class="typemode medium-module">
                                        <label>Type</label>
                                        <div class="selection-box">
                                            <select name="ptype">
                                                <option value="0">Property Type</option>
                                                <option value="83">Apartment</option>
                                                <option value="62">Building Area</option>
                                                <option value="67">Commercial</option>
                                                <option value="48">Condo</option>
                                                <option value="81">Cottage</option>
                                                <option value="57">Factory</option>
                                                <option value="52">Farm House</option>
                                                <option value="40">Guest House</option>
                                                <option value="84">Office</option>
                                                <option value="60">Residential</option>
                                                <option value="73">Restaurant</option>
                                                <option value="45">Shopping Mall</option>
                                                <option value="66">Show Rooms</option>
                                                <option value="55">Single Family</option>
                                                <option value="72">Vacant Land</option>
                                                <option value="80">Villa</option>
                                                <option value="71">Warehouse</option>
                                            </select>
                                        </div>                  
                                    </div>
                                    <!-- Location -->
                                    <div class="locationmode medium-module">
                                        <label>Locations</label>
                                        <div class="selection-box">
                                            <select name="plocation">
                                                <option value="0">Location</option>
                                                <option value="32">Adelaide</option>
                                                <option value="51">Auckland</option>
                                                <option value="65">Calgary</option>
                                                <option value="68">Cessnock</option>
                                                <option value="63">Dubbo</option>
                                                <option value="59">Helsinki</option>
                                                <option value="64">Melbourne</option>
                                                <option value="58">Perth</option>
                                                <option value="56">Sydney</option>
                                                <option value="69">Toronto</option>
                                                <option value="70">Vienna</option>
                                                <option value="53">Wellington</option>
                                            </select>
                                        </div>                  
                                    </div>

                                    <!-- Minprice -->
                                    <div class="minpricemode medium-module">
                                        <label>Min Price</label>
                                        <div class="selection-box">
                                            <select name="minprice">
                                                <option value="0">Any</option>
                                                <option value="1000">1000</option>
                                                <option value="2000">2000</option>
                                                <option value="3000">3000</option>
                                                <option value="4000">4000</option>
                                            </select>
                                        </div>                  
                                    </div>


                                    <!-- Max Price -->
                                    <div class="maxpricemode medium-module">
                                        <label>Max Price</label>
                                        <div class="selection-box">
                                           <select name="maxprice">
                                                <option value="0">Any</option>
                                                <option value="10000">10000</option>
                                                <option value="20000">20000</option>
                                                <option value="30000">30000</option>
                                                <option value="40000">40000</option>
                                            </select>
                                        </div>                  
                                    </div>
                                    
                                    <!-- Beds -->
                                    <div class="bedsmode small-module">
                                        <label>Beds</label>
                                        <div class="selection-box">
                                            <select name="pbeds">
                                                <option value=">0">Any</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>                  
                                    </div>
                                    
                                    <!-- Baths -->
                                    <div class="Bathsmode small-module">
                                        <label>Baths</label>
                                        <div class="selection-box">
                                            <select name="pbaths">
                                                <option value=">0">Any</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>                  
                                    </div>

                                    <!-- Floors -->
                                    <div class="Floorsmode small-module">
                                        <label>Floors</label>
                                        <div class="selection-box">
                                            <select name="pfloors">
                                                <option value=">0">Any</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>                  
                                    </div>

                                    <!-- Garages -->
                                    <div class="garagesmode small-module">
                                        <label>Garages</label>
                                        <div class="selection-box">
                                            <select name="pgarages">
                                                <option value=">0">Any</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>                  
                                    </div>

                                
                                    <input type="submit" name="dt-propery-search-submit" value="Search">
                                    
                                </form>
                            </div>
                            <div class="tabsframecontent">
                                <form action="#" method="post">
                                    <input type="hidden" name="searchby" value="default">


                                    <!-- Name -->
                                    <div class="namemode medium-module">
                                        <label>Name</label>
                                        <input type="text" name="dt_properties-field-2" value="">                 
                                    </div>


                                    <!-- Referrence Number -->
                                    <div class="numbermode medium-module">
                                        <label>Referrence Number</label>
                                        <input type="text" name="dt_properties-field-2" value="">                 
                                    </div>


                                    <!-- Type -->
                                    <div class="typemode medium-module">
                                        <label>Type</label>
                                        <div class="selection-box">
                                            <select name="ptype">
                                                <option value="0">Property Type</option>
                                                <option value="83">Apartment</option>
                                                <option value="62">Building Area</option>
                                                <option value="67">Commercial</option>
                                                <option value="48">Condo</option>
                                                <option value="81">Cottage</option>
                                                <option value="57">Factory</option>
                                                <option value="52">Farm House</option>
                                                <option value="40">Guest House</option>
                                                <option value="84">Office</option>
                                                <option value="60">Residential</option>
                                                <option value="73">Restaurant</option>
                                                <option value="45">Shopping Mall</option>
                                                <option value="66">Show Rooms</option>
                                                <option value="55">Single Family</option>
                                                <option value="72">Vacant Land</option>
                                                <option value="80">Villa</option>
                                                <option value="71">Warehouse</option>
                                            </select>
                                        </div>                  
                                    </div>
                                    <!-- Location -->
                                    <div class="locationmode medium-module">
                                        <label>Locations</label>
                                        <div class="selection-box">
                                            <select name="plocation">
                                                <option value="0">Location</option>
                                                <option value="32">Adelaide</option>
                                                <option value="51">Auckland</option>
                                                <option value="65">Calgary</option>
                                                <option value="68">Cessnock</option>
                                                <option value="63">Dubbo</option>
                                                <option value="59">Helsinki</option>
                                                <option value="64">Melbourne</option>
                                                <option value="58">Perth</option>
                                                <option value="56">Sydney</option>
                                                <option value="69">Toronto</option>
                                                <option value="70">Vienna</option>
                                                <option value="53">Wellington</option>
                                            </select>
                                        </div>                  
                                    </div>

                                
                                    
                                    <!-- Beds -->
                                    <div class="bedsmode small-module">
                                        <label>Beds</label>
                                        <div class="selection-box">
                                            <select name="pbeds">
                                                <option value=">0">Any</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>                  
                                    </div>
                                    
                                    <!-- Baths -->
                                    <div class="Bathsmode small-module">
                                        <label>Baths</label>
                                        <div class="selection-box">
                                            <select name="pbaths">
                                                <option value=">0">Any</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>                  
                                    </div>

                                    <!-- Floors -->
                                    <div class="Floorsmode small-module">
                                        <label>Floors</label>
                                        <div class="selection-box">
                                            <select name="pfloors">
                                                <option value=">0">Any</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>                  
                                    </div>

                                    <!-- Garages -->
                                    <div class="garagesmode small-module">
                                        <label>Garages</label>
                                        <div class="selection-box">
                                            <select name="pgarages">
                                                <option value=">0">Any</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>                  
                                    </div>

                                    
                                   
                                    <input type="submit" name="dt-propery-search-submit" value="Search">
            
                                </form>
                            </div>
                        </div>
                            
                    </div>
                    
                </div>
                    
            </div>
                
        </div>         

<script src="<?php echo $url_path ?>/js/1305.js"></script>