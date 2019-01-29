<style>
	h1{text-align: center;}
</style>
@extends("admin/controlpanel")
@section("content")
	<section class="container-fluid">
		<h1>{{$title}}</h1>
		@if(session('alert'))
			<section class="alert alert-danger">{{session('alert')}}</section>
		@endif
		<form action="" method="post">
			@csrf
		<table class="table table-bordered">
			<tbody>
				<tr>
					<th>Mã hãng:</th>
					<td><select name="maHang">
						<option value="0" hidden>-Chọn hãng-</option>
						@foreach($hang as $hg)
							<option value="{{$hg->id}}" {{$hg->id!=$sanpham->maHang?:'selected'}}>{{$hg->tenHang}}</option>
						@endforeach
					</select></td>
				</tr>
				<tr>
					<th>Tên sản phẩm:</th>
					<td><input type="text" class="form-control" name="tenSanPham" value="{{$sanpham->tenSanPham}}" required></td>
				</tr>
				<tr>
					<th>Ảnh sản phẩm:</th>
					<td><img src="{{asset('/public/img/'.$sanpham->anhSanPham)}}" alt="" width="20%"><input type="file" name="anhSanPham" value="{{$sanpham->anhSanPham}}" required></td>
				</tr>
				<tr>
					<th>Giá sản phẩm:</th>
					<td><input type="text" name="giaSanPham" class="form-control" value="{{$sanpham->giaSanPham}}" required></td>
				</tr>
				<tr>
					<th>Mô tả:</th>
					<td><textarea name="moTa">{{$sanpham->moTa}}</textarea><script>CKEDITOR.replace('moTa')</script></td>
				</tr>
				<tr>
					<th>Status:</<th></th>>
					<td><input type="radio" value="1" name="status" <?=($sanpham->status!='1')?:'checked'?>> Active <input type="radio" value="0" name="status" <?=($sanpham->status!='0')?:'checked'?>> Not Active</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" value="Sửa" class="btn btn-outline-success"></td>
				</tr>
			</tbody>
		</table>
		</form>
	</section>
@endsection