<!DOCTYPE HTML>
<html>
<head>
	<title> To Do List </title>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head><style>*{font-family: 'Comfortaa', cursive;}::-webkit-scrollbar{width:5px;}::-webkit-scrollbar-thumb{background:#ccc;}
</style>
<body style="background:#eee;">
<header>
<nav class="navbar navbar-expand-md bg-white fixed-top">
	@yield('header-content')
	@yield('nav-content')
</nav>
</header>
<section class="container">
	@yield('center-content')
</section>
</body>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
	@yield('valid-script')
</html>