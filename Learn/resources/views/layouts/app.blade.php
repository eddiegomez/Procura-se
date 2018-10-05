<html>
<head>
    <title>Learn - @yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
     <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css" rel="stylesheet">

    <!-- Animation library for notifications   -->
     <link rel="stylesheet" href="<?php echo asset('css/animate.min.css')?>" type="text/css" rel="stylesheet">

    <!--  Light Bootstrap Table core CSS    -->
     <link rel="stylesheet" href="<?php echo asset('css/light-bootstrap-dashboard.css?v=1.4.0')?>" type="text/css" rel="stylesheet">

    <!--  CSS for Demo Purpose, don't include it in your project     -->
     <link rel="stylesheet" href="<?php echo asset('css/demo.css')?>" type="text/css" rel="stylesheet">

    <!--     Fonts and icons     -->
        
     <link rel="stylesheet" href="<?php echo asset('css/pe-icon-7-stroke.css')?>" type="text/css" rel="stylesheet">
    </head>

    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css">

     <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo asset('css/materialdesignicons.min.css')?>">
    <link rel="stylesheet" href="<?php echo asset('css/vendor.bundle.base.css')?>">
    <link rel="stylesheet" href="<?php echo asset('css/vendor.bundle.addons.css')?>">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>">
    <!-- endinject -->

</head>
<body>

@yield('content')
</body>
  <!--   Core JS Files   -->
    <script src="<?php echo asset('js/jquery.3.2.1.min.js')?>" type="text/javascript"></script>
    <script src="<?php echo asset('js/bootstrap.min.js')?>" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="<?php echo asset('js/chartist.min.js')?>"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo asset('js/bootstrap-notify.js')?>"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="<?php echo asset('js/light-bootstrap-dashboard.js?v=1.4.0')?>"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="<?php echo asset('js/demo.js')?>"></script>


</html>