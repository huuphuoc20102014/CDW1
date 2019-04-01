<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Flights - Worldskills Travel</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/css/bootstrap.css')}}">
    
</head>
<body>
<div class="wrapper">
    <header>
        <nav class="navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="{{route('home')}}" class="navbar-brand">Worldskills Travel</a>
                </div>
                <div class="collapse navbar-collapse" id="main-navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li> @if(Session::has('login') && Session::get('login') == true)
                        <a href="{{route('user_up')}}">Welcome - {{ Session::get('firstname')." " . Session::get('lastname') }}
                        @else
                            <a href="#">Welcome 
                        @endif</a>
                        </li>

                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">List of airports <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                               
                            </ul>
                        </li>
                        <li class="dropdown ">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Flight list <span class="caret"></span></a>
                            <!-- <ul class="dropdown-menu" role="menu">
                               <li><a href="#">Action</a></li>
                               <li><a href="#">Another action</a></li>
                               <li><a href="#">Something else here</a></li>
                               <li class="divider"></li>
                               <li><a href="#">Separated link</a></li>
                               <li class="divider"></li>
                               <li><a href="#">One more separated link</a></li>
                            </ul> -->
                        </li>


                        <li><a href="{{route('home')}}">Statistical </a></li>
                        <li><a href="{{route('regis')}}">Register</a></li>
                        @if(Session::get('login') == false ) 
                        <li><a href="{{route('getLogin')}}">Log In</a></li>
                        @elseif(Session::has('login') && Session::get('login') == true)
                        <li><a href="{{route('getLogout')}}">Logout</a></li>
                        @endif                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>