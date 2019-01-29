<style>
	h4{margin: 20px 5px 0px 5px; font-weight: bold;background-color:#009a82;color: #fff;font-size: 20px;border-radius: 2px;padding: 10px;}
	.right{padding-right: 0;padding-left: 0}
	.right a{text-align: center;text-decoration: none;color:#000;border-radius: 5px;padding: 8px;border-bottom: 1px solid #fff; }
	.right a:hover{background-color:#009a82;color: yellow;}
</style>
<aside class="col-md-2 right">
<?php $gias=DB::table('mucgias')->get()?>
<h4><i class="fas fa-align-justify"></i> DANH MỤC GIÁ</h4>
@foreach($gias as $gia)
<a href="{{url('search/mucgia/'.$gia->id)}}">{{$gia->tenMucGia}}</a>
@endforeach
</aside>