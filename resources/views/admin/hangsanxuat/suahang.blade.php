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
					<th>Tên hãng:</th>
					<td><input type="text" class="form-control" name="tenHang" value="{{$hang->tenHang}}" required></td>
				</tr>
				<tr>
					<th>Status:</th>
					<td><input type="radio" value="1" name="status" <?=($hang->status!='1')?:'checked'?>> Active <input type="radio" value="0" name="status" <?=($hang->status!='0')?:'checked'?>> Not Active</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" value="Sửa" class="btn btn-outline-success"> <button onclick="location='{{url('admin/hangsanxuat')}}'" class="btn btn-primary">Quay lại</button></td>
				</tr>
			</tbody>
		</table>
		</form>
	</section>
@endsection