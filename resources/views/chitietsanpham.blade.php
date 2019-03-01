<style>
	.sanpham1{float: left;margin-top:40px;border: #ccc thin solid;padding: 10px;text-align: center;border-radius: 5px;margin-right: 30px;margin-left: 20px;}
	.sanpham1 img{padding: 20px;}
	.ctsp{float: left;margin-top: 40px;}
	.title{text-align: center;margin-top: 20px;font-weight: bold;}
	.motasp{clear: both;margin:20px;}
	.motasp label{margin: 20px 0}
	label{font-weight: bold;}
</style>
@extends("layout")
@section("title",$title)
@section("content")
<section class="container-fluid">
	<h3 class="title">CHI TIẾT SẢN PHẨM</h3>
	<section class="col-md-5 sanpham1">
		<img src="../public/img/{{$sanpham->anhSanPham}}" alt="" width="100%">
	</section>
	<section class="col-md-5 ctsp">
		<div><label for="">Tên Sản Phẩm: </label>{{$sanpham->tenSanPham}}</div>
		<div><label for="">Giá sản phẩm: </label>{{number_format($sanpham->giaSanPham,0,',','.')}} VNĐ</div>
		<button class="btn btn-outline-green" onclick="location='{{url('cart/'.$sanpham->id)}}'">Đặt hàng ngay</button>
	</section>
	<section class="motasp">
		<div><label for="">Mô Tả sản phẩm: </label><br>{{$sanpham->moTa}}</div>
	</section>
	<section>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		</script>
		<div class="fb-comments" data-href="{{url('/')}}" data-numposts="10" data-width="100%" data-order-by="time"></div>
	</section>
</section>


@endsection