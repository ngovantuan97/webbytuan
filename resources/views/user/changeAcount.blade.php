<style>
	.changecount{position: absolute; left: 25%;margin-top: 20px;}
	h3{text-transform: uppercase;}
</style>
@extends("layout")
@section("title",$title)
@section("content")
<section class="container-fluid">
	<div class="col-md-10 changecount" >
			<h3><i class="fas fa-receipt"></i> Thay đổi thông tin tài khoản</h3>
			@if(session('alert'))
				<section class="alert-info alert">{{session('alert')}}</section>
			@endif
			<form method="post" action="">
				@csrf
				<section class="form-group form-inline">
					<section class="col-md-4">Họ tên:</section>
					<section class="col-md-8"><input type="text" value="{{$info->hoTen}}" name="hoTen" class="form-control" required></section>
				</section>
				<section class="form-group form-inline">
					<section class="col-md-4">Tên đăng nhập:</section>
					<section class="col-md-8"><input type="text" value="{{$info->tenDangNhap}}" name="tenDangNhap" class="form-control" required></section>
				</section>
				<section class="form-group form-inline">
					<section class="col-md-4">Điện thoại:</section>
					<section class="col-md-8"><input type="number" value="{{$info->dienThoai}}" name="dienThoai" class="form-control" required></section>
				</section>
				<section class="form-group form-inline">
					<section class="col-md-4">Email:</section>
					<section class="col-md-8"><input type="text" value="{{$info->email}}" name="email" class="form-control" required></section>
				</section>
				<section class="form-group form-inline">
					<section class="col-md-4">Địa chỉ:</section>
					<section class="col-md-8"><textarea name="diaChi" class="form-control"  required>{{$info->diaChi}}</textarea></section>
				</section>
				<section class="form-group form-inline">
					<section class="col-md-4">Nhập mật khẩu:</section>
					<section class="col-md-8"><input type="password" value="" name="matKhau" class="form-control" required></section>
				</section>
				<section class="form-group">
					<section><input type="submit" value="Cập nhật thông tin" class="btn btn-outline-success"> <a href="{{url('infoAcount')}}" class="btn btn-success">Quay lại</a></section>
				</section>
			</form>
	</div>
</section>
@endsection