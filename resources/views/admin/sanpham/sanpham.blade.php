<style>
	h1{text-align: center;}
	.add{text-align: center;margin-bottom: 20px;}
	table th{text-align: center;}
</style>
@extends("admin/controlpanel")
@section("content")
	<section class="container-fluid">
		<h1>{{$title}}</h1>
		<section class="add"><input type="button" value="Thêm sản phẩm" class="btn btn-outline-primary" onclick="location='{{url('admin/themsanpham')}}'"></section>
		<table class="table table-bordered" align="center">
			<thead class="table-active">
				<tr>
					<th>Mã hãng</th>
					<th>Tên sản phẩm</th>
					<th>Ảnh sản phẩm</th>
					<th>Giá sản phẩm</th>
					<th>Trạng thái</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($sanphams as $sp)
				<tr>
					<td>{{$sp->tenHang}}</td>
					<td>{{$sp->tenSanPham}}</td>
					<td><img src="{{asset('public/img/'.$sp->anhSanPham)}}" alt="" width="20%"></td>
					<td>{{$sp->giaSanPham}}</td>
					<!-- <td>{{$sp->moTa}}</td> -->
					<td>{{($sp->status)==1?'Active':'Not Active'}}</td>
					<td><input type="button" value="Edit" class="btn btn-outline-info" onclick="location='{{url('admin/suasanpham/'.$sp->id)}}'"></td>
					<td><a href="{{url('admin/xoasanpham/'.$sp->id)}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<section class="panition">{{$sanphams->render()}}</section>
	</section>
@endsection