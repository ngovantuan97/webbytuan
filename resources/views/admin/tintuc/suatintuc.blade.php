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
					<th>Ảnh sản phẩm:</th>
					<td><img src="{{asset('/public/img/'.$tintucs->anhTinTuc)}}" alt="" width="50%"><br><input type="file" name="anhTinTuc" value="{{$tintucs->anhTinTuc}}" required></td>
				</tr>
				<tr>
					<th>Tiêu đề:</th>
					<td><input type="text" class="form-control" name="tieuDe" value="{{$tintucs->tieuDe}}" required></td>
				</tr>
				<tr>
					<th>Ngày đăng:</th>
					<td><input type="date" name="ngayDang" class="form-control" value="{{$tintucs->ngayDang}}" required></td>
				</tr>
				<tr>
					<th>Mô tả:</th>
					<td><textarea name="moTa" >{{$tintucs->moTa}}</textarea><script>CKEDITOR.replace('moTa')</script></td>
				</tr>
				<tr>
					<th>Status:</th>
					<td><input type="radio" value="1" name="status" <?=($tintucs->status!='1')?:'checked'?>> Active <input type="radio" value="0" name="status" <?=($tintucs->status!='0')?:'checked'?>> Not Active</td>
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