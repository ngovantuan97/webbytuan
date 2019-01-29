<style>
	h1{text-align: center;margin-top: 20px;}
	.add{text-align: center;margin-bottom: 20px;}
</style>
@extends("admin/controlpanel")
@section("content")
	<section class="container-fluid">
		<h1>{{$title}}</h1>
		<section class="add"><input type="button" value="Thêm giá" class="btn btn-outline-primary" onclick="location='{{url('admin/themgia')}}'"></section>
		<table class="table table-bordered" align="center">
			<thead class="table-active">
				<tr>
					<th>Tên mức giá</th>
					<th>Mức giá từ</th>
					<th>Mức giá đến</th>
					<th>Trạng thái</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($gias as $gia)
				<tr>
					<td>{{$gia->tenMucGia}}</td>
					<td>{{$gia->mucGiaTu}}</td>
					<td>{{$gia->mucGiaDen}}</td>
					<td>{{($gia->status)==1?'Active':'Not Active'}}</td>
					<td><input type="button" value="Edit" class="btn btn-outline-info" onclick="location='{{url('admin/suagia/'.$gia->id)}}'"> <a href="{{url('admin/xoagia/'.$gia->id)}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</section>
@endsection