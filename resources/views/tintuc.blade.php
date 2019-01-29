<style>
     .newstitle h1{border-bottom: 5px solid red;margin-bottom: 5px;}
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
	<p class="tt"><a href="{{url('/')}}">Trang chủ</a> >> <i>Tin Tức</i></p>
	<h1>{{$title}}</h1>
	
</section>

@foreach( $tintucs as $tt)
<section class="container-fluid">
	<section class="container tintucs">
		<div class="col-md-4 anhTT">
			<img src="{{asset('public/img/'.$tt->anhTinTuc)}}" alt="" width="100%">
		</div>
		<div class="col-md-8 noidung">
			<div><h5><a href="{{url('newdetails/'.$tt->id)}}">{{$tt->tieuDe}}</a></h5></div>
			<div><img src="{{asset('public/img/dongho.png')}}" alt="" width="3%">  {{$tt->ngayDang}}</div>
			<div>{{substr($tt->moTa,0,200).'...'}}</div>
		</div>
	</section>
</section>
@endforeach
<section>{{$tintucs->render()}}</section>
@endsection