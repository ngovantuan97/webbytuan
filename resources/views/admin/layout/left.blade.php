<style>
	aside a{text-decoration: none; display: block;border: 1px solid green;text-align: center;border-radius: 5px;}
	.left a{text-decoration: none;color: #000;padding: 5px;}
	.left a:hover{background-color: #4D70B0;color: yellow}
	.left h3{background-color: #4FAF91;text-align: center;margin:5px 5px 0 5px;border-radius: 5px;;padding:5px;}
	aside{border-bottom: none;padding: 0;height:1100px;background-color: #ccc;}
	/*.left{background-color: #ccc;height: auto;}*/
	
</style>
<?php 
		$pendingOrder=DB::table('don_hangs')->where('status','1')->get();
		$processingOrder=DB::table('don_hangs')->where('status','2')->get();
		$processedOrder=DB::table('don_hangs')->where('status','3')->get();
		$pendingContact=DB::table('lienhes')->where('status','1')->get();
		$processedContact=DB::table('lienhes')->where('status','2')->get();
 ?>
<aside class="col-md-2 left">
	<h3>Danh Mục</h3>
	<section class="leftCP"><a href="{{url('admin/hangsanxuat')}}">Hãng sản xuất</a><a href="{{url('admin/mucgia')}}">Mức giá</a></section><a href="{{url('admin/sanpham')}}">Sản phẩm</a><a href="{{url('admin/tintuc')}}">Tin Tức</a><a href="{{url('admin/member')}}">Member</a><a href="{{url('admin/order/1')}}">Đơn hàng chưa xử lý <span style="color: red">({{count($pendingOrder)}})</span></a>
	<a href="{{url('admin/order/2')}}">Đơn hàng đang xử lý <span style="color: red">({{count($processingOrder)}})</span></a>
	<a href="{{url('admin/order/3')}}">Đơn hàng đã xử lý <span style="color: red">({{count($processedOrder)}})</span></a>
	<a href="{{url('admin/contact/1')}}">Liên hệ chưa xử lý <span style="color: red">({{count($pendingContact)}})</span></a>
	<a href="{{url('admin/contact/2')}}">Liên hệ đã xử lý <span style="color: red">({{count($processedContact)}})</span></a>
</aside>