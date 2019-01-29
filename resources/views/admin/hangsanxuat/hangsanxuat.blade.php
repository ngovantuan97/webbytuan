<style>
	h1{text-align: center;margin-top: 20px;}
	.add{text-align: center;margin-bottom: 20px;}
</style>
@extends("admin/controlpanel")
@section("content")
	<section class="container-fluid">
		<h1>{{$title}}</h1>
		<section class="add"><input type="button" value="Thêm hãng" class="btn btn-outline-primary" onclick="location='{{url('admin/themhang')}}'"></section>
		<table class="table table-bordered " align="center">
			<thead class="table-active">
				<tr>
					<th>Tên hãng</th>
					<th>Trạng thái</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($hangs as $hang)
				<tr>
					<td>{{$hang->tenHang}}</td>
					<td>{{($hang->status)==1?'Active':'Not Active'}}</td>
					<td><input type="button" value="Edit" class="btn btn-outline-info" onclick="location='{{url('admin/suahang/'.$hang->id)}}'"> <a href="{{url('admin/xoahang/'.$hang->id)}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</section>
@endsection