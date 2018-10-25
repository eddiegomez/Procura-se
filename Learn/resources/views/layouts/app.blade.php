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
    


@include('inc.messages')
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

    <script src="<?php echo asset('js/table/jquery-2.1.4.min.js')?>"></script>
    <script src="<?php echo asset('js/table/popper.min.js')?>"></script>
    <script src="<?php echo asset('js/table/plugins.js')?>"></script>
    <script src="<?php echo asset('js/table/main.js')?>"></script>


    <script src="<?php echo asset('js/table/datatables.min.js')?>"></script>
    <script src="<?php echo asset('js/table/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?php echo asset('js/table/dataTables.buttons.min.js')?>"></script>
    <script src="<?php echo asset('js/table/buttons.bootstrap.min.js')?>"></script>
    <script src="<?php echo asset('js/table/jszip.min.js')?>"></script>
    <script src="<?php echo asset('js/table/pdfmake.min.js')?>"></script>
    <script src="<?php echo asset('js/table/vfs_fonts.js')?>"></script>
    <script src="<?php echo asset('js/table/buttons.html5.min.js')?>"></script>
    <script src="<?php echo asset('js/table/buttons.print.min.js')?>"></script>
    <script src="<?php echo asset('js/table/buttons.colVis.min.js')?>"></script>
    <script src="<?php echo asset('js/table/datatables-init.js')?>"></script>



</html>