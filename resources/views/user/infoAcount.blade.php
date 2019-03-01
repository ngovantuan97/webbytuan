<style>
	.infoacount{position: absolute; left: 25%;margin-top: 30px;margin-bottom: 30px;}
	h3{text-transform: uppercase;}
</style>
@extends("layout")
@section("title",$title)
@section("content")
<section class="container-fluid">
	<div class="col-md-10 infoacount">
			<h3><i class="fas fa-receipt"></i> Thông tin tài khoản</h3>
			<section class="form-group form-inline">
				<section class="col-md-4">Họ tên:</section>
				<section class="col-md-8"><input type="text" value="{{$info->hoTen}}" name="hoTen" class="form-control" required disabled></section>
			</section>
			<section class="form-group form-inline">
				<section class="col-md-4">Tên đăng nhập:</section>
				<section class="col-md-8"><input type="text" value="{{$info->tenDangNhap}}" name="tenDangNhap" class="form-control" required disabled></section>
			</section>
			<section class="form-group form-inline">
				<section class="col-md-4">Điện thoại:</section>
				<section class="col-md-8"><input type="number" value="{{$info->dienThoai}}" name="dienThoai" class="form-control" required disabled></section>
			</section>
			<section class="form-group form-inline">
				<section class="col-md-4">Email:</section>
				<section class="col-md-8"><input type="text" value="{{$info->email}}" name="email" class="form-control" required disabled></section>
			</section>
			<section class="form-group form-inline">
				<section class="col-md-4">Địa chỉ:</section>
				<section class="col-md-8"><textarea name="diaChi" class="form-control"  disabled>{{$info->diaChi}}</textarea></section>
			</section>
			<section class="form-group">
				<section> <a href="{{url('changeInfo/'.$info->id)}}" class="btn btn-primary" >Thay đổi thông tin</a></section>
			</section>
	</div>
</section>
@endsection