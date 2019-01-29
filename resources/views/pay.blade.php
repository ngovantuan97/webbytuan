<style>
	.userorder .col-md-4{float: left;font-weight: bold;}
	.userrecive .col-md-4 {float: left;font-weight: bold;}
	.userorder h3{background-color: #ccc;color: #000;margin-bottom: 20px;padding: 5px;}
	.userrecive h3{background-color: #ccc;color: #000;margin-bottom: 20px;padding: 5px;}
	.pays h3{background-color: #ccc;color: #000;margin-bottom: 20px;padding: 5px;}
</style>
@extends("layout")
@section("title",$title)
@section("content")
<section class="container-fluid">
	<h1 style="text-align: center;margin-top: 20px;">{{$title}}</h1>
	<section class="container-fluid userorder">
		<h3><i class="fas fa-info-circle"></i> Thông tin người đặt hàng</h3>
		<table class="table">
			<tr>
				<td><section class="col-md-4">Họ tên:</section></td>
				<td><section class="col-md-8">{{$member->hoTen}}</section></td>
			</tr>
			<tr>
				<td><section class="col-md-4">Điện thoại:</section></td>
				<td><section class="col-md-8">{{$member->dienThoai}}</section></td>
			</tr>
			<tr>
				<td><section class="col-md-4">Email:</section></td>
				<td><section class="col-md-8">{{$member->email}}</section></td>
			</tr>
			<tr>
				<td><section class="col-md-4">Địa chỉ:</section></td>
				<td><section class="col-md-8">{{$member->diaChi}}</section></td>
			</tr>
		</table>
	</section>
	<form action="" method="post">
		@csrf
		<section class="container-fluid userrecive">
			<h3><i class="fas fa-receipt"></i> Thông tin người nhận hàng</h3>
			<section class="form-group form-inline">
				<section class="col-md-4">Họ tên:</section>
				<section class="col-md-8"><input type="text" value="{{$member->hoTen}}" name="hoTen" class="form-control" required></section>
			</section>
			<section class="form-group form-inline">
				<section class="col-md-4">Điện thoại:</section>
				<section class="col-md-8"><input type="number" value="{{$member->dienThoai}}" name="dienThoai" class="form-control" required></section>
			</section>
			<section class="form-group form-inline">
				<section class="col-md-4">Email:</section>
				<section class="col-md-8"><input type="text" value="{{$member->email}}" name="email" class="form-control" required></section>
			</section>
			<section class="form-group form-inline">
				<section class="col-md-4">Địa chỉ:</section>
				<section class="col-md-8"><textarea name="diaChi" class="form-control" required>{{$member->diaChi}}</textarea></section>
			</section>
		</section>
		<section class="container-fluid pays">
			<h3><i class="fab fa-cc-amazon-pay "></i> Hình thức thanh toán</h3>
			<section class="col-md-4">&nbsp;</section>
			<section class="col-md-8"><select name="phuongThucThanhToan" >
				@foreach($phuongThucThanhToans as $phuongThuc)
					<option value="{{$phuongThuc->id}}">
						{{$phuongThuc->phuongThuc}}
					</option>
				@endforeach
			</select></section>
		</section>
		<section class="container-fluid">
			<section class="col-md-4">&nbsp;</section>
			<section class="col-md-8">
				<input type="submit" value="Xác nhận" class="btn btn-outline-primary">
			</section>
		</section>	
	</form>
</section>
@endsection
