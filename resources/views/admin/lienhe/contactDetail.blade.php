<style>
	
	.userorder .col-md-4{float: left;font-weight: bold;}
	.xuly .col-md-4{float: left;font-weight: bold;}
	.chitietlienhe h1{text-align: center;margin-top: 20px;}
	.chitietlienhe h2{background-color: #4FAF91;padding: 5px;}
</style>
@extends("admin/controlpanel")
@section("content")
<section class="container-fluid chitietlienhe">
	<h1>{{$title.' : số '.$conTact->id}}</h1>
	@if(session('alert'))
		<section class="alert alert-success">{{session('alert')}}</section>
	@endif
	<section class="container-fluid userorder">
		<h2>THông Tin Người Liên Hệ</h2>
		<section class="col-md-4">Họ tên</section>
		<section class="col-md-8">{{$conTact->hoTen}}</section>
		<section class="col-md-4">Điện thoại</section>
		<section class="col-md-8">{{$conTact->dienThoai}}</section>
		<section class="col-md-4">Email</section>
		<section class="col-md-8">{{$conTact->email}}</section>
		<section class="col-md-4">Địa chỉ</section>
		<section class="col-md-8">{{$conTact->diaChi}}</section>
		<section class="col-md-4">Tiêu đề</section>
		<section class="col-md-8">{{$conTact->tieuDe}}</section>
		<section class="col-md-4">Nội dung</section>
		<section class="col-md-8">{{$conTact->noiDung}}</section>
	</section>
	<form action="" method="post">
		@csrf
		<section class="container-fluid xuly">
			<form action="" name="frm" method="post" >
				@csrf
				<section class="col-md-4">Trạng thái đơn hàng</section>
				<section class="col-md-8">
					
					<select name="status" >
						<option value="1" {{$conTact->status!='1'?:'selected'}} {{$conTact->status!='2'?:'hidden'}}>Chưa liên hệ</option>
						<option value="2" {{$conTact->status!='2'?:'selected'}}>Đã liên hệ</option>
					</select>
				</section>
				<section class="col-md-8">
					<input type="submit" value="Xử Lý" class="btn btn-outline-primary" onclick="if(status.selectedIndex=='1') if(confirm('Are you sure')) return true; else false;">
				</section>
			</form>
		</section>	
	</form>
</section>
@endsection
