<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1273">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                    <div class="header-location head-fl-left"><i class="fa fa-home"></i> <a href="#">455 Martinson, Los Angeles</a></div>
                    <div class="header-email head-fl-left"><i class="fa fa-envelope-o"></i> <a href="mailto:support@email.com">support@email.com</a></div>
                    <div class="header-phone head-fl-left"><i class="fa fa-phone"></i> <a href="#">8 (043) 567 - 89 - 30</a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <div class="header-social pull-right">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom" id="myTopnav">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="index.html" class="navbar-brand page-scroll"><img src="./images/logo.png" alt="logo" class="img-responsive"/></a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <nav>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#" class="current">Home</a></li>
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contacts</a></li>
                                <li><a href="#">F.A.Q</a></li>
                                <li><a href="#">404 Page Not Found</a></li>
                                <li><a href="#">Gallery</a></li>
                            </ul>
                        </li>

                        <li><a href="#">Reservation</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Rooms <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">All Rooms</a></li>
                                <li><a href="#">Room Detail</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                            <li><a href="#">All Posts</a></li>
                            <li><a href="#">Post Detail</a></li>
                            </ul>
                        </li>
                                
                        <li><a href="#">Purchase</a></li>
                    </ul>
                    <a href="#" id="menu-icon"><img src="images/menubar.png" alt="" class="img-responsive"></a>
                    </nav>
                </div>
            </div> 
        </div>       
    </div>
</div>