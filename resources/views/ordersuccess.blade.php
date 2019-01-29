<style>
	.redirect{text-align: center; margin-top: 30px;font-style: italic;font-weight: bold;font-size: 35px;height: 500px;color: red;}
</style>
@extends("layout")
@section("title",$title)
@section("content")
<section class="redirect">	
		<script type="text/javascript">
         <!--
            function Redirect() {
               window.location="{{url('/')}}";
            }
            
            document.write("Bạn đã đặt hàng thành công!");
            setTimeout('Redirect()', 3000);
         //-->
      </script>
</section>
@endsection