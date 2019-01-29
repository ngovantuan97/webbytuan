<style>	
		.creat{ position: absolute;left: 25%;margin-top: 20px; }
		.creat form label{font-weight: bold;}
		.creat span.batbuoc{color: green;}
		.creatacount {background-color: #B6A7A7}
</style>
@extends("layout")
@section("title",$title)
@section("content")
<section class="container-fluid creatacount">
	<section class="col-md-6 creat">
				<h1 style="text-align: center;margin-top: 40px; color: #fff;padding: 40px 0 0 0">{{$title}}</h1>
				@if(session('alert'))
					<section class="alert alert-danger">{{session('alert')}}</section>
				@endif
			<form action="" method="post">
				@csrf
				<section class="form-group">
					<label for="">Tên đăng nhập: <span class="batbuoc">(*)</span></label>
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
					  </div>
					  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="tenDangNhap" required>
					</div>
					<!-- <input type="text" name="tenDangNhap" class="form-control" required> -->
				</section>
				<section class="form-group">
					<label for="">Mật khẩu: <span class="batbuoc">(*)</span></label>
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>
					  </div>
					  <input type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" name="matKhau" required>
					</div>
					<!-- <input type="password" name="matKhau" class="form-control" required> -->
				</section>
				<section class="form-group">
					<label for="">Họ tên: <span class="batbuoc">(*)</span></label>
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-circle"></i></span>
					  </div>
					  <input type="text" class="form-control" placeholder="Nhập họ tên" aria-label="Username" aria-describedby="basic-addon1" name="hoTen" required>
					</div>
					<!-- <input type="text" name="hoTen" class="form-control" required> -->
				</section>
				<section class="form-group">
					<label for="">Email: <span class="batbuoc">(*)</span></label>
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
					  </div>
					  <input type="email" class="form-control" placeholder="Nhập email" aria-label="Username" aria-describedby="basic-addon1" name="email" required>
					</div>
					<!-- <input type="email" name="email" class="form-control" required> -->
				</section>
				<section class="form-group">
					<label for="">Số điện thoại: <span class="batbuoc">(*)</span></label>
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-square"></i></span>
					  </div>
					  <input type="number" class="form-control" placeholder="Nhập số điện thoại" aria-label="Username" aria-describedby="basic-addon1" name="dienThoai" required>
					</div>
					<!-- <input type="number" name="dienThoai" class="form-control" required> -->
				</section>
				<section class="form-group">
					<label for="">Địa chỉ: <span class="batbuoc">(*)</span></label>
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="basic-addon1"><i class="fas fa-address-card"></i></span>
					  </div>
					  <input type="text" class="form-control" placeholder="Nhập địa chỉ" aria-label="Username" aria-describedby="basic-addon1" name="diaChi" required>
					</div>
					<!-- <input type="text" name="diaChi" class="form-control" required> -->
				</section>
				<section class="form-group">
					<input type="submit" value="Đăng ký" class="btn btn-success" style="margin-bottom: 20px;">
				</section>
			</form>
	</section>
</section>
@endsection