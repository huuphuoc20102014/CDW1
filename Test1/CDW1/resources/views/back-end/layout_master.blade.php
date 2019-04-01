<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quản lý </title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{ URL::asset('/back-end/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('/back-end/css/uniform.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('/back-end/css/select2.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('/back-end/css/matrix-style.css')}}" />
  <link rel="stylesheet" href="{{ URL::asset('/back-end/css/matrix-media.css')}}" />
  <link href="{{ URL::asset('/back-end/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

  <!--Header-part-->
  <div id="header">
    <h1><a href="dashboard.html">Quản lý Admin</a></h1>
  </div>
  
  
 
  <div id="sidebar">
    <ul>
      <li> <a href="{{ URL::to('/admin') }}"><i class="icon icon-th-list"></i> <span>Danh sách Testimonials </span></a></li>

    </ul>
  </div>


@yield('content')

  <!--Footer-part-->
  <div class="row-fluid">
  <div id="footer" class="span12"> 2018 &copy; TDC - Lập trình web 2</div>
  </div>
  <!--end-Footer-part-->
  <script src="{{ URL::asset('/back-end/js/jquery.min.js')}}"></script> 
  <script src="{{ URL::asset('/back-end/js/jquery.ui.custom.js')}}"></script> 
  <script src="{{ URL::asset('/back-end/js/bootstrap.min.js')}}"></script> 
  <script src="{{ URL::asset('/back-end/js/jquery.uniform.js')}}"></script> 
  <script src="{{ URL::asset('/back-end/js/select2.min.js')}}"></script> 
  <script src="{{ URL::asset('/back-end/js/jquery.dataTables.min.js')}}"></script> 
  <script src="{{ URL::asset('/back-end/js/matrix.js')}}"></script> 
  <script src="{{ URL::asset('/back-end/js/matrix.tables.js')}}"></script>
</body>
</html>
