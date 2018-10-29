<html>
<head>
    <title>Learn - @yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <link rel="stylesheet" href="<?php echo asset('css/light-bootstrap-dashboard.css?v=1.4.0')?>" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/animate.min.css')?>" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('css/demo.css')?>" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('css/materialdesignicons.min.css')?>">
</head>
<body>
    
@yield('content')
</body>
    <script src="<?php echo asset('js/jquery.3.2.1.min.js')?>" type="text/javascript"></script>
    <script src="<?php echo asset('js/bootstrap.min.js')?>" type="text/javascript"></script>
</html>