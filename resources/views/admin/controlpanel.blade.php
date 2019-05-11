<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ADMIN</title>
	<link rel="stylesheet" href="{{asset('public/css/app.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/css.css')}}">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
	<link rel="shortcut icon" type="image/png" href="public/img/logo_3.png"/>
</head>
<style>article{border-right: none;border-bottom: none;border-top: none;}
	body{background: #fff}
</style>
<body>
	<section class="container-fluid">
		<section>
			@include("admin/layout/header")
		</section>
		<!-- @include("admin/layout/menungang") -->
		<!-- <section class="container-fluid"> -->
			@include("admin/layout/left")
			<article class="col-md-10">
				@yield("content")
			</article>
			<!-- @include("admin/layout/right") -->
		<!-- </section> -->
		<!-- @include("admin/layout/footer") -->
	</section>
	<script src="{{asset('public/js/app.js')}}"></script>
</body>
</html>