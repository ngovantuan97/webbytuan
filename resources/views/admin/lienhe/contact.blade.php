<style>
	h1{text-align: center;margin-top: 20px;}
	.add{text-align: center;margin-bottom: 20px;}
</style>
@extends("admin/controlpanel")
@section("content")
	<section class="container-fluid">
		<h1>{{$title}}</h1>
		@if(count($contacts)>0)
		<table class="table table-bordered" align="center">
			<thead class="table-active">
				<tr>
					<th>STT</th>
					<th>Tên người liên hệ</th>
					<th>Điện thoại</th>
					<th>Email</th>
					<th>Địa chỉ</th>
					<th>Tiêu Đề</th>
					<th>Trạng thái đơn hàng</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($contacts as $contact)
				<tr>
					<td>{{$contact->id}}</td>
					<td>{{$contact->hoTen}}</td>
					<td>{{$contact->dienThoai}}</td>
					<td>{{$contact->email}}</td>
					<td>{{$contact->diaChi}}</td>
					<td>{{$contact->tieuDe}}</td>
					<td>{{($contact->status)==2?'Processed':'No Process'}}</td>
					<td><a href="{{url('admin/contact/detail/'.$contact->id)}}" class="btn btn-outline-info">Chi tiết</a> <a href="{{url('admin/contact/del/'.$contact->id)}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')" style="display: {{$contact->status=='1'?'block':'none'}};">Delete</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@else
		<section class="alert alert-info">Không có đơn hàng nào</section>
		@endif
	</section>
@endsection