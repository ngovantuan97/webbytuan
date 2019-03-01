<style>
	h4{margin: 20px 5px 0px 5px; font-weight: bold;background-color:#009a82;color: #fff;font-size: 20px;border-radius: 2px;padding: 10px;}
	.left{padding-left: 0;padding-right: 0}
	.left .hangsx{text-align: center;text-decoration: none;color:#000;border-radius: 5px;padding: 8px; border-bottom: 1px solid #fff;}
	.left .hangsx:hover{background-color:#009a82;color: yellow;}
	.new {border: 1px solid #ccc;margin-left: 5px; width: 97%;margin-right: 5px;}
	.new .anhtintuc img{float: left;margin-right: 5px;padding: 6px;}
	.new .anhtintuc{margin-bottom: 20px;margin-top: 20px;}
	.new .tieuDe{text-decoration: none;color: #000;background-color:#fff;}
	.new .tieuDe:hover{color:#009a82 }
	/*.ads img{padding:0 8px;margin-top: 20px;}*/
</style>
<aside class="col-md-2 left">
<?php $hangs=DB::table('hangsanxuats')->get()?>
<h4><i class="fas fa-align-justify"></i>  HÃNG SẢN XUẤT</h4>
@foreach($hangs as $hang)
<a href="{{url('hangsanxuat/'.$hang->tenHang.'/'.$hang->id)}}" class="hangsx">{{$hang->tenHang}}</a>
@endforeach
<!-- <?php $tintucs=db::table('tintucs')->paginate(4);?>
<h4><i class="fas fa-align-justify"></i> TIN TỨC</h4>
@foreach($tintucs as $tt)
<section class="new">
	<div class="anhtintuc">
				<img src="{{asset('public/img/'.$tt->anhTinTuc)}}" alt="" width="40%">		
	</div>
	<div class="noidungs"><a href="" class="tieuDe">{{substr($tt->tieuDe,0,33).'...'}}</a><p><img src="{{asset('public/img/dongho.png')}}" alt="" width="6%"> {{$tt->ngayDang}}</p></div>
</section>
@endforeach -->
<!-- <div class="clearfix"></div>
<div class="ads">
	<img src="{{asset('public/img/banner-l-1.png')}}" alt="" width="100%"><br>
	<img src="{{asset('public/img/banner-l-2.png')}}" alt="" width="100%"><br>
	<img src="{{asset('public/img/banner-l-3.png')}}" alt="" width="100%"><br>
	<img src="{{asset('public/img/banner-l-4.png')}}" alt="" width="100%"><br>
	<img src="{{asset('public/img/banner-l-7.png')}}" alt="" width="100%"><br>
</div> -->
</aside>