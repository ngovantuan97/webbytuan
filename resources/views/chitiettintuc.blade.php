<style>
     .newstitle .tt a{text-decoration: none;color:red;font-weight: bold;}
    .tt{margin-top: 50px;}
	.anhTT{float: left;}
	.noidung{float: left;}
	.tintucs{overflow: hidden;clear: both;position: relative;margin-bottom: 30px;border-bottom: 1px #ccc solid;margin-top: 40px;}
	.anhTT img {margin-bottom: 40px;}
	.noidung div a{text-decoration: none;color: #000;}
	.noidung div a:hover{color: #56E343;}
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
		      <img class="d-block w-100" src="{{asset('public/img/slide1-1-1.jpg')}}" alt="First slide" style="height: 416px;">
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
<section class="newstitle container-fluid">
	<p class="tt"><a href="{{url('/')}}">Trang chủ</a> >> <a href="{{url('tintuc')}}">Tin Tức</a> >> {{$tintucss->tieuDe}}</p>
	<h1>{{$tintucss->tieuDe}}</h1>
</section>
<section class="container-fluid">
	<div><img src="{{asset('public/img/'.$tintucss->anhTinTuc)}}" alt="" width="100%"> </div>
	<div style="margin:20px 0;"><img src="{{asset('public/img/dongho.png')}}" alt="" width="2%" > {{$tintucss->ngayDang}}</div>
	<div>{{$tintucss->moTa}}</div>
</section>
@endsection