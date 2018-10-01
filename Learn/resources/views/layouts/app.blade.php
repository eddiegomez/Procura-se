<html>
<head>
    <title>Learn - @yield('title')</title>
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css">

</head>
<body>
	<nav class="navbar navbar-dark bg-primary">
		<a href="#" class="navbar-brand" style="color: white;">Procura-se</a>
	</nav>
@yield('content')
</body>
</html>