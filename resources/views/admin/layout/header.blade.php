<style>
	.headerCP p{float: right;margin-top: 10px;}
	.headerCP {background-color: #BEB0B0}
	.headerCP a.quantri{color: black;text-align: center;background-color: #4FAF91 }
	.headerCP a.quantri:hover{color: yellow}
	a.logOut{color: #000;text-decoration: none;}
	a.logOut:hover{color: yellow}
</style>
<header class="container-fluid">
	<div class=" headerCP nav">
		<a href="{{url('admin')}}" class="navbar-brand quantri col-md-2">Quản trị hệ thống</a>
		<p class="col-md-2"><span ><i class="fa fa-user"></i>  Hello: {{session('admin')}}</span> [<a href="{{url('admin/logout')}}" class="logOut">Logout</a>]</p>
	</div>
</header>