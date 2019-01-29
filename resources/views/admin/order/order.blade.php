<style>
	h1{text-align: center;margin-top: 20px;}
	.add{text-align: center;margin-bottom: 20px;}
</style>
@extends("admin/controlpanel")
@section("content")
	<section class="container-fluid">
		<h1>{{$title}}</h1>
		@if(count($orders)>0)
		<table class="table table-bordered" align="center">
			<thead class="table-active">
				<tr>
					<th>Mã đơn hàng</th>
					<th>Tên người nhận hàng</th>
					<th>Điện thoại</th>
					<th>Email</th>
					<th>Địa chỉ</th>
					<th>Trạng thái đơn hàng</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($orders as $order)
				<tr>
					<td>{{$order->id}}</td>
					<td>{{$order->hoTen}}</td>
					<td>{{$order->dienThoai}}</td>
					<td>{{$order->email}}</td>
					<td>{{$order->diaChi}}</td>
					<td>{{($order->status)==1?'Active':'Not Active'}}</td>
					<td><a href="{{url('admin/order/detail/'.$order->id)}}" class="btn btn-outline-info">Chi tiết</a> <a href="{{url('admin/order/del/'.$order->id)}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')" style="display: {{$order->status=='1'?'block':'none'}};">Delete</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@else
		<section class="alert alert-info">Không có đơn hàng nào</section>
		@endif
	</section>
@endsection