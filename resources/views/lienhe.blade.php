<style>
	.slide{margin-top: 20px;}
	.batbuoc{color: red}
	.TĐLH{margin: 20px 0;background-color: #ccc;}
	div>a.tieudeLH{ font-weight: bold;color: black;text-decoration: none;}
</style>
@extends("layout")
@section("title",$title)
@section("content")
<section>
		<div style="margin-top: 20px;"><a href="{{url('/')}}" class="tieudeLH">Trang trủ</a> >> <a href="{{url('lienhe')}}" class="tieudeLH">Liên hệ</a></div>
		
	</section>
<section class="slide">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="{{asset('public/img/bannerLienhe.png')}}" alt="First slide" style="height: 416px;">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="{{asset('public/img/slide1-1.jpg')}}" alt="Second slide" style="height: 416px;">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="{{asset('public/img/slide3.png')}}" alt="Third slide" style="height: 416px;">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</section>
	<section class="TĐLH">
		<div class="col-md-2" style="background-color: #009a82;padding: 10px;"><i class="fas fa-info" style="margin:0 20px;"></i><b>{{$title}}</b></div>
	</section>
<section class="container-fluid">
		<div class="col-md-6">
			<p>Mọi thông tin liên hệ vui lòng nhập vào form dưới đây cho chúng tôi. Xin chân thành cảm ơn!</p>
			@if(session('alert'))
			<div class="alert alert-info">{{session('alert')}}</div>
			@endif
			<form action="" method="post">
				@csrf
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
					<label for="">Tiêu đề: <span class="batbuoc">(*)</span></label>
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="basic-addon1"><i class="fas fa-address-card"></i></span>
					  </div>
					  <input type="text" class="form-control" placeholder="Nhập tiêu đề" aria-label="Username" aria-describedby="basic-addon1" name="tieuDe" required>
					</div>
					<!-- <input type="text" name="diaChi" class="form-control" required> -->
				</section>
				<section class="form-group">
					<label for="">Nội dung: <span class="batbuoc">(*)</span></label>
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="basic-addon1"><i class="fas fa-file"></i></span>
					  </div>
					  <textarea class="form-control" placeholder="Nội dung" aria-label="Username" aria-describedby="basic-addon1" name="noiDung" required></textarea>
					</div>
					<!-- <input type="text" name="tenDangNhap" class="form-control" required> -->
				</section>
				<section class="form-group">
					<input type="submit" value="Gửi đi" class="btn btn-success" style="margin-bottom: 20px;"> <input type="reset" value="Nhập lại" class="btn btn-success" style="margin-bottom: 20px;">
				</section>
			</form>
		</div>
</section>
@endsection