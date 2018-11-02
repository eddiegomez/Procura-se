<html>
<head>
    <title>Learn - @yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

   

    <!-- Animation library for notifications   -->
     <link rel="stylesheet" href="<?php echo asset('css/animate.min.css')?>" type="text/css" rel="stylesheet">

    <!--  Light Bootstrap Table core CSS    -->
     <link rel="stylesheet" href="<?php echo asset('css/light-bootstrap-dashboard.css?v=1.4.0')?>" type="text/css" rel="stylesheet">

    <!--  CSS for Demo Purpose, don't include it in your project     -->
     <link rel="stylesheet" href="<?php echo asset('css/demo.css')?>" type="text/css" rel="stylesheet">

    <!--     Fonts and icons     -->
        
    <link rel="stylesheet" href="<?php echo asset('css/pe-icon-7-stroke.css')?>" type="text/css" rel="stylesheet">
    

    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css">

     <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo asset('css/materialdesignicons.min.css')?>">
    <link rel="stylesheet" href="<?php echo asset('css/vendor.bundle.base.css')?>">
    <link rel="stylesheet" href="<?php echo asset('css/vendor.bundle.addons.css')?>">

    <link rel="stylesheet" href="<?php echo asset('css/normalize.css')?>">
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo asset('css/cs-skin-elastic.css')?>">
    <link rel="stylesheet" href="<?php echo asset('css/dataTables.bootstrap.min.css')?>">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>">
    <!-- endinject -->
 <!-- Bootstrap core CSS     -->
 <link rel="stylesheet" href="<?php echo asset('css/bootstrapp.min.css')?>" type="text/css" rel="stylesheet">
</head>
<body>
     @yield('content')
</body>

  <!--   Core JS Files   -->
    <script src="<?php echo asset('js/jquery.3.2.1.min.js')?>" type="text/javascript"></script>
    <script src="<?php echo asset('js/bootstrap.min.js')?>" type="text/javascript"></script>

    <!--  Charts Plugin -->

    <!--  Notifications Plugin    -->

    <!--  Google Maps Plugin    -->

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="<?php echo asset('js/light-bootstrap-dashboard.js?v=1.4.0')?>"></script>



    <script src="<?php echo asset('js/table/datatables.min.js')?>"></script>
    <script src="<?php echo asset('js/table/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?php echo asset('js/table/jszip.min.js')?>"></script>
    <script src="<?php echo asset('js/table/vfs_fonts.js')?>"></script>
    <script src="<?php echo asset('js/table/datatables-init.js')?>"></script>



</html>