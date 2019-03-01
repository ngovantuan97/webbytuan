<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{asset('public/css/css.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/app.css')}}">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<style>
	article{min-height: 800px; margin-bottom: 20px;border: none;}
	aside{min-height: 800px;border: none;margin-bottom: 30px;}
	header,nav{border: none;}
	body{font-family: sans-serif;}
</style>
<body>
	<section class="container-fluid">
		@include("layout/header")
		@include("layout/menungang")
		
		<section class="container-fluid">
			@include("layout/left")
			<article class="col-md-8">
				@yield("content")
			</article>
			@include("layout/right")
		</section>
		@include("layout/footer")
	</section>
	<script src="{{asset('public/js/app.js')}}"></script>
</body>
</html>