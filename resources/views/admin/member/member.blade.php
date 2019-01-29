
@extends("admin/controlpanel")
@section("content")
<section class="container-fluid">
	<h1>{{$title}}</h1>
	<table class="table table-bordered">
		<tr class="table-active">
			<th>ID</th>
			<th>Họ tên</th>
			<th>Điện thoại</th>
			<th>Email</th>
			<th>Địa chỉ</th>
			<th>Action</th>
		</tr>
		@foreach($memBers as $member)
		<tr>
			
			<td>{{$member->id}}</td>
			<td>{{$member->hoTen}}</td>
			<td>{{$member->dienThoai}}</td>
			<td>{{$member->email}}</td>
			<td>{{$member->diaChi}}</td>
			<td> <a href="{{url('admin/member/del/'.$member->id)}}" class="btn btn-outline-success" onclick="return confirm('Are you sure?')">Xóa</a></td>
			
		</tr>
		@endforeach
	</table>
</section>
@endsection