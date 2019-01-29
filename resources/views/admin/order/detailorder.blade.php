<style>
	
	.userorder .col-md-4{float: left; font-weight: bold;}
	.userrecive .col-md-4 {float: left;font-weight: bold;}
	.xuly .col-md-4{float: left;font-weight: bold;}
	.chitietdonhang h1{text-align: center;margin-top: 20px;}
	.chitietdonhang h2{background-color: #4FAF91;padding: 5px;margin-bottom: 20px;color: yellow;font-style: italic;}
</style>
@extends("admin/controlpanel")
@section("content")
<section class="container-fluid chitietdonhang">
	<h1>{{$title.' : số '.$order->id}}</h1>
	@if(session('alert'))
		<section class="alert alert-success">{{session('alert')}}</section>
	@endif
	<section class="container-fluid userorder">
		<h2>Thông Tin Người Đặt Hàng</h2>
		<section class="col-md-4">Họ tên :</section>
		<section class="col-md-8">{{$order->hoTenNguoiDat}}</section>
		<section class="col-md-4">Điện thoại :</section>
		<section class="col-md-8">{{$order->dienThoaiNguoiDat}}</section>
		<section class="col-md-4">Email :</section>
		<section class="col-md-8">{{$order->emailNguoiDat}}</section>
		<section class="col-md-4">Địa chỉ :</section>
		<section class="col-md-8">{{$order->diachiNguoiDat}}</section>
	</section>
	<form action="" method="post">
		@csrf
		<section class="container-fluid userrecive">
			<h2>Thông Tin Người Nhận Hàng</h2>
			<section class="col-md-4">Họ tên :</section>
			<section class="col-md-8">{{$order->hoTen}}</section>
			<section class="col-md-4">Điện thoại :</section>
			<section class="col-md-8">{{$order->dienThoai}}</section>
			<section class="col-md-4">Email :</section>
			<section class="col-md-8">{{$order->email}}</section>
			<section class="col-md-4">Địa chỉ :</section>
			<section class="col-md-8">{{$order->diaChi}}</section>
		</section>
		<section class="container-fluid">
			<h2>Sản Phẩm Đặt Mua</h2>
			<table class="table table-bordered">
					<tr class="table-active">
						<th>Hãng sản xuất</th>
						<th>Tên sản phẩm</th>
						<th>Ảnh sản phẩm</th>
						<th>Giá mua</th>
						<th>Số lượng mua</th>
						<th>Thành Tiền</th>
					</tr>
			@foreach($sanPhams as $sanPham)
				<tr>
					<td>{{$sanPham->tenHang}}</td>
					<td>{{$sanPham->tenSanPham}}</td>
					<td><img src="{{asset('public/img/'.$sanPham->anhSanPham)}}" alt="" width="20%"></td>
					<td>{{$sanPham->price}}</td>
					<td>{{$sanPham->quantity}}</td>
					<td>{{$sanPham->price*$sanPham->quantity}}</td>
				</tr>
			@endforeach
			</table>
		</section>
		<section class="container-fluid xuly">
			<h2>Thông Tin Đặt Hàng</h2>
			<section class="col-md-4">Phương thức thanh toán :</section>
			<section class="col-md-8">{{$phuongThuc}}</section>
			<section class="col-md-4">Ngày đặt hàng :</section>
			<section class="col-md-8">{{$order->ngayDatHang}}</section>
			<form action="" name="frm" method="post" >
				@csrf
				<section class="col-md-4">Trạng thái đơn hàng :</section>
				<section class="col-md-8">
					
					<select name="status" >
						<option value="1" {{$order->status!='1'?:'selected'}} {{$order->status!='3'?:'hidden'}}>Chưa xử lý</option>
						<option value="2" {{$order->status!='2'?:'selected'}} {{$order->status!='3'?:'hidden'}}>Đang xử lý</option>
						<option value="3" {{$order->status!='3'?:'selected'}}>Đã xử lý</option>
					</select>
				</section>
				<section class="col-md-8 ">
					<input type="submit" value="Xử Lý" class="btn btn-primary" onclick="if(status.selectedIndex=='2') if(confirm('Are you sure')) return true; else false;">
				</section>
			</form>
		</section>	
	</form>
</section>
@endsection
