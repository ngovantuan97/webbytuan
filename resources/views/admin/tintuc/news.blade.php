<style>
	h1{text-align: center;}
	.add{text-align: center;margin-bottom: 20px;}
	table th{text-align: center;}
</style>
@extends("admin/controlpanel")
@section("content")
	<section class="container-fluid">
		<h1>{{$title}}</h1>
		<section class="add"><input type="button" value="Thêm tin tức" class="btn btn-outline-primary" onclick="location='{{url('admin/themtintuc')}}'"></section>
		<table class="table table-bordered" align="center">
			<thead class="table-active">
				<tr>
					<th>Số TT</th>
					<th>Ảnh tin tức</th>
					<th>Tiêu đề</th>
					<th>Ngày đăng</th>
					<th>Trạng thái</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($tintucs as $tt)
				<tr>
					<td>{{$tt->id}}</td>
					<td><img src="{{asset('public/img/'.$tt->anhTinTuc)}}" alt="" width="20%"></td>
					<td>{{$tt->tieuDe}}</td>
					<td>{{$tt->ngayDang}}</td>
					<td>{{($tt->status)==1?'Active':'Not Active'}}</td>
					<td><input type="button" value="Edit" class="btn btn-outline-info" onclick="location='{{url('admin/suatintuc/'.$tt->id)}}'"></td>
					<td><a href="{{url('admin/xoatintuc/'.$tt->id)}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</section>
@endsection