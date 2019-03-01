<style>
	.redirect{text-align: center; margin-top: 30px;font-style: italic;font-weight: bold;font-size: 35px;height: 500px;color: red;}
</style>
@extends("layout")
@section("content")
<section class="redirect">	
		<script type="text/javascript">
         <!--
            function Redirect() {
               window.location="{{url('/')}}";
            }
            
            document.write("Bạn đã thay đổi thông tin thành công! Vui lòng đăng nhập lại ^^");
            setTimeout('Redirect()', 3000);
         //-->
      </script>
</section>
@endsection