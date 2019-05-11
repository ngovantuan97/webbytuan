<style>
	.cart-product{border-bottom: 1px solid #ccc; padding:1rem;margin: 20px;}
	.alert{text-align: center;}
	.action{margin-bottom: 20px;}
</style>
@extends("layout")
@section("title",$title)
@section("content")
<h1 style="text-align: center;margin-top: 20px;color: orange">{{$title}}</h1>
@if(session("cart"))
<?php $products=DB::table('sanphams')->whereIn('id',array_keys(session("cart")))->get() ?>
	<section class="cart container-fluid">
			<?php $tongTien=0 ?>
		<form method="post" id="frm">
			@csrf
		
		<table class="table-bordered table" >
			<tr class="table-active">
				<th>Ảnh mô tả</th>
				<th>Tên sản phẩm</th>
				<th>Giá</th>
				<th>Thành Tiền</th>
				<th>Số lượng</th>
				
				<th>Xóa</th>
			</tr>
			@foreach($products as $product)
			<tr>
				<td width="30%"><section><img src="{{asset('public/img/'.$product->anhSanPham)}}" alt="" width="25%"></section></td>
				<td>{{$product->tenSanPham}}</td>
				<td>{{number_format($product->giaSanPham,0,',','.')}}</td>
				<td><section  style="text-align: right;"><?php $thanhTien=$product->giaSanPham*session("cart.$product->id"); ?>{{number_format($thanhTien,0,',','.')}}</section></td>
				<td><section  style="text-align: right"><input type="number" value='{{session("cart.$product->id")}}' name="{{$product->id}}" min="1" style="width: 50px;"></section></td>
				<td><section >
				<a href="{{url('cart/delete/'.$product->id)}}" class="btn btn-outline-danger">Delete</a>
			</section></td>
			</tr>
			<?php $tongTien+=$thanhTien ?>
			@endforeach
		</table>
		<!-- <section class="cart-product row">
			<section class="col-md-2">
				
			</section>
			<section class="col-md-2" style="text-align: right"></section>
			<section class="col-md-2" style="text-align: right;"></section>
			
			
			
		</section> -->
		
		
		</form>
		<section class="action"><a href="{{url('cart/delall')}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure?');">Delete All</a> <input type="submit" form="frm" value="Update Cart" class="btn btn-outline-success"> <a href="{{url('cart/order')}}" class="btn btn-outline-primary">Pay</a> <a href="{{url('/')}}" class="btn btn-success">Mua tiếp</a></section>
		<section style="color: red ;font-size: 25px;"><b>Tổng tiền:</b> {{number_format($tongTien,0,',','.')}} VNĐ</section>
	
	</section>
@else
<section class="alert alert-danger">Giỏ hàng trống</section>
@endif
@endsection