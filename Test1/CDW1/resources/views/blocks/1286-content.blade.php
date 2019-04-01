<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1286">
    <div class="container">
        <div class="row reservation-top">
            <form class="form-horizontal">
                <div class="row">
                    <div class="col-md-3 col-xs-12">
                        <div class="check-in">
                            <div class="form-group">
                                <label>Check in</label>
                                <input class="form-control __plannerInput" id="datetimepicker1" type="date" placeholder="10-05-2015">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-xs-12">
                        <div class="check-out">
                            <div class="form-group">
                                <label>Check out</label>
                                <input class="form-control __plannerInput" id="datetimepicker2" type="date" placeholder="17-05-2015">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 col-xs-6">
                        <div class="Adults">
                            <div class="form-group">
                                <label>Adults</label>
                                <div class="theme-select">
                                    <select class="form-control __plannerSelect" >
                                        <option value="">1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-2 col-xs-6">
                        <div class="Kids">
                            <div class="form-group">
                                <label>Kids</label>
                                <div class="theme-select">
                                    <select class="form-control __plannerSelect">
                                        <option value="">1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-2 col-xs-12">
                        <div class="Search">
                            <div class="form-group">
                                <a href="wizzard-step2.html" class="btn btn-default wizzard-search-btn">Search</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>        