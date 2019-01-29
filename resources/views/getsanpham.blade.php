<style>
	.sanpham{float: left;margin-top:40px;border: #ccc thin solid;padding: 10px;text-align: center;border-radius: 5px;}
	.sanpham img{padding: 10px;}
	.sanpham .tenSanPham a{text-decoration: none;color: #000;}
	.sanpham .giaSanPham{color: red}
	.alert {margin-top: 20px;}
	.slide{margin-top: 20px;}
	
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
@if(count($sanPham)==0)
	<section class="alert alert-info">Không có sản phẩm</section>
@endif
@foreach($sanPham as $sanP)
<section class="container-fluid">
	<section class="col-md-3 sanpham">
		<div><a href="{{url('chitietsanpham/'.$sanP->id)}}"><img src="{{asset('public/img/'.$sanP->anhSanPham)}}" alt="" width="100%"></a></div>
		<div class="tenSanPham"><a href="#">{{$sanP->tenSanPham}}</a></div>
		<div class="giaSanPham">{{number_format($sanP->giaSanPham,0,',','.')}}VNĐ</div>
		<input type="button" class="btn btn-ouline-success" value="Add to cart" onclick="location='{{url('cart/'.$sanP->id)}}'">
	</section>
</section>
@endforeach
@endsection