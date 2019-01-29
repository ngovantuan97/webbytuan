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
		<form action="" method="post" enctype="multipart/form-data">
			@csrf
		<table class="table table-bordered">
			<tbody>
				<tr>
					<th>Mã hãng:</th>
					<td><select name="maHang">
						<option value="0" hidden>-Chọn hãng-</option>
						@foreach($hang as $hg)
							<option value="{{$hg->id}}">{{$hg->tenHang}}</option>
						@endforeach
					</select></td>
				</tr>
				<tr>
					<th>Tên sản phẩm:</th>
					<td><input type="text" class="form-control" name="tenSanPham" required></td>
				</tr>
				<tr>
					<th>Ảnh sản phẩm:</th>
					<td><input type="file" class="form-control" name="anhSanPham" required></td>
				</tr>
				<tr>
					<th>Giá sản phẩm:</th>
					<td><input type="text" class="form-control" name="giaSanPham" required></td>
				</tr>
				<tr>
					<th>Mô tả sản phẩm:</th>
					<td><textarea name="moTa" id="moTa"></textarea><script>CKEDITOR.replace('moTa')</script></td>
				</tr>
				<tr>
					<th>Status:</th>
					<td><input type="radio" value="1" name="status" checked> Active <input type="radio" value="0" name="status"> Not Active</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" value="Thêm" class="btn btn-outline-success"></td>
				</tr>
			</tbody>
		</table>
		</form>
	</section>
@endsection