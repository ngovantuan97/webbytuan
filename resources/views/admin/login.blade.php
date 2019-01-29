<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login admin</title>
	<link rel="stylesheet" href="{{asset('public/css/app.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/css.css')}}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<style>
	.login{ background-color: #A59B9B;height: 500px;position: absolute;top:20%;left: 35%}
	h1{padding-top:50px;text-align: center;font-weight: bold;color:#23FCFF}
	.hread{background:url('public/img/bgr_1.png') repeat;height: 900px;}
	.login label{font-weight: bold;font-size: 25px;}
</style>
<body>
	<section class="container-fluid hread">
		<section class="container col-md-4 login">
			<h1>LOGIN ADMIN</h1>
			@if(isset($alert))
				<section class="alert alert-danger">{{$alert}}</section>
			@endif
			<form action="" method="post">
				@csrf
				<section class="form-group">
					<label for="">Username:</label>
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-tie"></i></span>
					  </div>
					  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="username" required>
					</div>
					<!-- <input type="text" name="username" class="form-control" required> -->
				</section>
				<section class="form-group">
					<label for="">Password:</label>
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>
					  </div>
					  <input type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" name="password" required>
					</div>
					<!-- <input type="password" name="password" class="form-control" required> -->
				</section>
				<section class="form-group">
					<input type="submit" class="btn btn-primary" value="Login">
				</section>
			</form>
		</section>
	</section>
	<script src="{{asset('public/js/app.js')}}"></script>
</body>
</html>