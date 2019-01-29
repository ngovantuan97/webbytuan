<style>	
		.loginn{position: absolute;left: 25%;background-color: #726868}
		.loginn form label{font-weight: bold;}
</style>
@extends("layout")
@section("title",$title)
@section("content")
<section class="container-fluid">
	<section class="col-md-6 loginn">
		<h1 style="text-align: center;margin-top: 40px;padding:40px 0 20px 0; color: #fff">{{$title}}</h1>
		@if(session('alert'))
			<section class="alert alert-danger">{{session('alert')}}</section>
		@endif
			<form action="" method="post">
				@csrf
				<section class="form-group">
					<label for="">Tên đăng nhập:</label>
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
					  </div>
					  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="tenDangNhap" required>
					</div>
					<!-- <input type="text" name="tenDangNhap" class="form-control" required> -->
				</section>
				<section class="form-group">
					<label for="">Mật khẩu:</label>
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>
					  </div>
					  <input type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" name="matKhau" required>
					</div>
					<!-- <input type="password" name="matKhau" class="form-control" required> -->
				</section>
				<section class="form-group">
					<input type="submit" value="Đăng nhập" class="btn btn-primary" style="margin-bottom: 20px;"> <button  class="btn btn-primary" style="margin-bottom: 20px;" onclick="location='{{url('creatacount')}}'">Đăng Ký</button>
				</section>
			</form>
	</section>
</section>
@endsection