<style>
	.lienHe{background-color:#009a82;}
	header .timkiem {float: left;}
	form{margin-top: 20px;}
	.logo{float: left;margin:10px 20px 30px 20px;}
	.tk{float: left;margin-top: 60px;}
	/*.logo img{margin-left: 20px;}*/
	.cartt {float: left;margin-top: 70px;margin-left: 30px;}
	.cartt a{text-decoration: none;color: #000;font-weight: bold;}
	.cartt a:hover{color:#009a82 }
	.cartt i{font-size: 50px;color: red;margin-right: 5px;}
	.user {float: left;margin-top: 80px;}
	.user p{color: green;float: left;font-weight: bold;border:1px green solid;padding:8px 5px ;border-radius: 5px;}
	.user p:hover{color: #fff; background-color: green;opacity: 0.8}
	.timkiem input{width: 400px;}
	.hread{float: right;}
	.lienhe{float: left;margin-right: 10px;}
	.lienH a{border-right:1px solid #ccc;}
	.lienH a i{color: #fff;padding: 5px;margin-right: 5px;}
	.lienH a:nth-child(1){border-left: 1px solid #ccc;}
	.lienH a:nth-child(1) i:hover{color: #1B5EA9}
	.lienH a:nth-child(2) i:hover{color: #ccc;}
	.lienH a:nth-child(3) i:hover{color: #D59F51}
	.lienH a:nth-child(4) i:hover{color:red}
	.lienhe img{margin-right: 5px;}
	/*header{background:url('public/img/bgr_3.jpg') repeat;}*/
</style>
<section class="container-fluid lienHe">
		<div class="hread col-md-3">
			<div class="lienhe">
				<img src="{{asset('public/img/phone.png')}}" alt="">
				<span style="color: #fff;">Holine: </span><a href="" style="font-weight: bold;text-decoration: none;color: #fff;">0982939512</a>
			</div>
			<div class="lienH">
				<a href=""><i class="fab fa-facebook-f"></i></a>
				<a href=""><i class="fab fa-twitter"></i></a>
				<a href=""><i class="fab fa-google-plus-g"></i></a>
				<a href=""><i class="fab fa-youtube"></i></a>
			</div>
		</div>
	</section>
<header class="container-fluid ">
	<section>
		<div class="col-md-3 logo">
			<a href="{{url('/')}}"><img src="{{asset('public/img/logo_3.png')}}" alt="" width="80%"></a>
		</div>
		<div class="col-md-4 tk">
			<form action="{{url('search/tenSanPham')}}" method="POST" role="form">
				@csrf
				<div class="form-group timkiem">
					<input type="text" class="form-control" id="" placeholder="Tìm kiếm sản phẩm" name="tenSanPham" required>
				</div>
				<button type="submit" class="btn btn-primary">Search</button>
			</form>
		</div>
		<div class="col-md-2 cartt">
			<div><i class="fas fa-cart-plus"></i><a href="{{url('cart')}}">Giỏ hàng</a></div>
		</div>
		<div class="col-md-2 user">
			<div><p class="acount">Xin chào: <a style="text-decoration: none;color: red;" href="{{url('infoAcount')}}">{{session('user')}}</a></p><button onclick="location='{{url('logout')}}'" class="btn btn-outline-success">Logout</button></div>
		</div>
	</section>
</header>
