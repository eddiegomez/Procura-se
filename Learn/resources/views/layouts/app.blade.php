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

</head>
<body>

@yield('content')
</body>
</html>