<style>
	.sanpham{float: left;margin-top:40px;border: #ccc thin solid;padding: 10px;text-align: center;border-radius: 5px;margin-bottom: 20px;}
	.sanpham img{padding: 15px;-webkit-transition: all 0.1s ease-in-out;
  	-moz-transition: all 0.1s ease-in-out;
  	-o-transition: all 0.1s ease-in-out;
  	transition: all 0.1s ease-in-out;}
  	
	.slide{margin-top: 20px;}
	.title{font-size: 15px; margin-top: 10px;background-color: #009a82;border-radius: 2px;padding: 4px; font-style: italic;color: #fff;}
	.title i{margin-left: 5px;margin-top: 5px;}
	.banner{margin-top: 25px;}
	.sanpham .tenSanPham{margin-top: 15px;}
	.sanpham .tenSanPham a:hover{color: #2DBF8A}
	.sanpham .tenSanPham a{text-decoration: none;color: #000;}
	.sanpham .giaSanPham{color: red}
	.sanPhamHome{position: relative;}
	.panition{overflow: hidden;clear: both;}
	.marsk{background-color: #ccc;position: absolute;width: 100%;height: 71%;top: 0;left: 0;opacity:0.75;display: none;}
	.marsk a{position: absolute;top: 45%; color: #000;margin-left: 20px;text-decoration: none;left: 30%;}
	.img:hover .marsk{display: block;}
	.img:hover .marsk a{text-decoration: none;}
</style>
@extends("layout")
@section("title",$title)
@section("content")
	<section class="slide">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="{{asset('public/img/slide1.png')}}" alt="First slide" style="height: 416px;">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="{{asset('public/img/slide2.jpg')}}" alt="Second slide" style="height: 416px;">
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
	<div class="banner">
		<a href=""><img src="{{asset('public/img/banner.png')}}" alt="" width="100%;"></a>
	</div>
	<div class="title">
		<h5><i class="fas fa-angle-right"></i> Sản phẩm</h5>
	</div>
@foreach( $sphams as $sp)
<section class="container-fluid sanPhamHome">	
	<section class="col-md-3 sanpham">
		<div class="img">
			<a href=""><img src="public/img/{{$sp->anhSanPham}}" alt="" width="100%">
			<div class="marsk"><a href="{{url('chitietsanpham/'.$sp->id)}}">Xem chi tiết</a></div>
			</a>
			
		</div>
		<div class="tenSanPham"><a href="#">{{$sp->tenSanPham}}</a></div>
		<div class="giaSanPham">{{number_format($sp->giaSanPham,0,',','.')}} VNĐ</div>
		
		<button class="btn btn-ouline-success" onclick="location='{{url('cart/'.$sp->id)}}'">Add to cart</button>
	</section>
</section>
@endforeach
<section class="panition">{{$sphams->render()}}</section>
@endsection