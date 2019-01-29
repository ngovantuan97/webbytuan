<?php


Route::get('/','CController@home');

Route::post('lienhe','CController@conTactPost');
Route::get('lienhe','CController@conTact');
Route::get('newdetails/{id}','CController@newDetails');
Route::get('tintuc','CController@news');
Route::get('chitietsanpham/{id}','CController@chiTietSanPham');
Route::get('hangsanxuat/{tenHang}/{id}','CController@getSanPham');
Route::get('search/mucgia/{id}','CController@searchMucGia');
Route::post('search/tenSanPham','CController@searchByName');


//user
Route::post('creatacount','CController@createAcountPost');
Route::get('creatacount','CController@createAcount');
Route::get('logout','CController@logout');
Route::post('login','CController@postLogin');
Route::get('login','CController@login');

/// gio hang
//thanh toán
Route::prefix('cart')->group(function()
{
	Route::post('order','CController@postOrderCart');
	Route::get('order','CController@orderCart');
	Route::get('delall','CController@delallCart');
	Route::get('delete/{id}','CController@delToCart');
	Route::get('{id}','CController@addToCart');
	Route::get('/','CController@viewCart');
	Route::post('/','CController@updateCart');	 
});
///Admin
Route::prefix('admin')->group(function(){
	// liên hệ
	Route::prefix('contact')->group(function(){
		Route::get('del/{id}','AController@delContact');
		Route::post('detail/{id}','AController@contactDetailPost');
		Route::get('detail/{id}','AController@contactDetail');
		Route::get('{status}','AController@conTact');
	});
	//đơn hàng(order)
	Route::prefix('order')->group(function(){
		Route::get('del/{id}','AController@delOrder');
		Route::post('detail/{id}','AController@orderDetailPost');
		Route::get('detail/{id}','AController@orderDetail');
		Route::get('{status}','AController@order');
	});
	//member
	Route::get('member/del/{id}','AController@delThanhVien');
	Route::get('member','AController@thanhVien');
	// Tin tuc
	Route::get('tintuc','AController@tintuc');
	Route::get('themtintuc','AController@themtintuc');
	Route::post('themtintuc','AController@postthemtintuc');
	Route::get('xoatintuc/{id}','AController@xoatintuc');
	Route::get('suatintuc/{id}','AController@suatintuc');
	Route::post('suatintuc/{id}','AController@postsuatintuc');
	//admin
	Route::get('/','AController@admin');
	Route::post('/','AController@postLogin');
	Route::get('controlpanel','AController@controlpanel');
	Route::get('logout','AController@logout');
	
	//hang san xuat
	Route::get('hangsanxuat','AController@hangsanxuat');
	Route::get('themhang','AController@themhang');
	Route::post('themhang','AController@postthemhang');
	Route::get('xoahang/{id}','AController@xoahang');
	Route::get('suahang/{id}','AController@suahang');
	Route::post('suahang/{id}','AController@postsuahang');
	
	//muc gia
	Route::get('mucgia','AController@mucgia');
	Route::get('themgia','AController@themgia');
	Route::post('themgia','AController@postthemgia');
	Route::get('xoagia/{id}','AController@xoagia');
	Route::get('suagia/{id}','AController@suagia');
	Route::post('suagia/{id}','AController@postsuagia');
	
	//san pham
	Route::get('sanpham','AController@sanpham');
	Route::get('themsanpham','AController@themsanpham');
	Route::post('themsanpham','AController@postthemsanpham');
	Route::get('xoasanpham/{id}','AController@xoasanpham');
	Route::get('suasanpham/{id}','AController@suasanpham');
	Route::post('suasanpham/{id}','AController@postsuasanpham');
});


