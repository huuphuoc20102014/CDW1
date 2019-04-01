<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1277">
    <!-- Services -->
    <div class="container">
        <div class="title-main">
            <h2 class="h2">Our Services<span class="title-secondary">Great. Safe. Free.</span></h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <h3 class="service_title"><i class="fa fa-globe"></i> Different Tours</h3>
                <p>Improve ashamed married expense bed her comfort pursuit mrs. Four time took ye your as fail lady.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <h3 class="service_title"><i class="fa fa-taxi"></i> Taxi Service</h3>
                <p>Improve ashamed married expense bed her comfort pursuit mrs. Four time took ye your as fail lady.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <h3 class="service_title"><i class="fa fa-glass"></i> Bar Included</h3>
                <p>Improve ashamed married expense bed her comfort pursuit mrs. Four time took ye your as fail lady.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <h3 class="service_title"><i class="fa fa-life-ring"></i> Discount System</h3>
                <p>Improve ashamed married expense bed her comfort pursuit mrs. Four time took ye your as fail lady.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <h3 class="service_title"><i class="fa fa-leaf"></i> Professional Staff</h3>
                <p>Improve ashamed married expense bed her comfort pursuit mrs. Four time took ye your as fail lady.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <h3 class="service_title"><i class="fa fa-eye"></i> Parking 24/7</h3>
                <p>Improve ashamed married expense bed her comfort pursuit mrs. Four time took ye your as fail lady.</p>
            </div>
        </div>
    </div>
</div> 


