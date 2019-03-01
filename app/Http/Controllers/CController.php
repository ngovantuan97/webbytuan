<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\sanpham;
use App\hangsanxuat;
use App\mucgia;
use App\member;
use App\phuongthucthanhtoan;
use App\donhang;
use App\orderDetails;
use App\tintuc;
use App\lienhe;

class CController extends Controller
{
	//thong tin tài khoản
	function updateAcount($id, Request $request)
	{
		$hoTen=$request->input('hoTen');
		$email=$request->input('email');
		$diaChi=$request->input('diaChi');
		$dienThoai=$request->input('dienThoai');
		$tenDangNhap=$request->input('tenDangNhap');
		$matKhau=md5($request->input('matKhau'));
		$ktra=member::where('matKhau',$matKhau)->where('id',$id)->first();
		if (asset($ktra))
		{
			$alert='Mật khẩu sai hoặc không đúng';
			return redirect()->back()->with(['alert'=>$alert]);
		}
		member::where('id',$id)->update(['hoTen'=>$hoTen,'tenDangNhap'=>$tenDangNhap,'diaChi'=>$diaChi,'dienThoai'=>$dienThoai,'email'=>$email,'matKhau'=>$matKhau]);
		session()->flush('user');
		return view('user.changesuccess');

	}
	function changeAcount($id)
	{
		$title="Thay đổi thông tin tài khoản";
		$info=member::where('id',$id)->where('status','1')->first();
		return view('user.changeAcount',compact('title','info'));
	}
	function getInfo()
	{
		$title="Thông tin tài khoản";
		$info=member::where('tenDangNhap',session('user'))->where('status','1')->first();
		return view('user.infoAcount',compact('title','info'));
	}
	//liên hệ
	function conTactPost(Request $request)
	{
		$hoTen=$request->input('hoTen');
		$email=$request->input('email');
		$diaChi=$request->input('diaChi');
		$dienThoai=$request->input('dienThoai');
		$tieuDe=$request->input('tieuDe');
		$noiDung=$request->input('noiDung');
		lienhe::insert(['hoTen'=>$hoTen,'email'=>$email,'diaChi'=>$diaChi,'dienThoai'=>$dienThoai,'tieuDe'=>$tieuDe,'noiDung'=>$noiDung]);
		$alert='Cảm ơn bạn đã đã gửi ý kiến. Chúng tôi sẽ tiếp thu và lắng nghe ý kiến của bạn';
		return redirect()->back()->with(['alert'=>$alert]);
	}
	function conTact()
	{
		$title='Liên hệ';
		return view('lienhe',compact('title'));
	}
	//tintuc
	function newDetails($id)
	{
		$title='Tin tức chi tiết';
		$tintucss=tintuc::where('id',$id)->first();
		return view('chitiettintuc',compact('title','tintucss'));
	}
	function news()
	{
		$title='Tin Tức';
		$tintucs=tintuc::orderBy('id','desc')->paginate(6);
		return view('tintuc',compact('title','tintucs'));
	}
	
	// user
	function createAcountPost(Request $request)
	{
		$tenDangNhap=$request->input('tenDangNhap');
		$matKhau=md5($request->input('matKhau'));
		$hoTen=$request->input('hoTen');
		$email=$request->input('email');
		$dienThoai=$request->input('dienThoai');
		$diaChi=$request->input('diaChi');
		$tenDangKyTonTai=member::where('tenDangNhap',$tenDangNhap)->where('email',$email)->get();
		if (count($tenDangKyTonTai)>0)
		{
			$alert='Tên này đã được sử dụng';
			return redirect()->back()->with(['alert'=>$alert]);
		}
		member::insert(['tenDangNhap'=>$tenDangNhap,'matKhau'=>$matKhau,'hoten'=>$hoTen,'dienThoai'=>$dienThoai,'email'=>$email,'diaChi'=>$diaChi]);
		$title='Tạo tài khoản thành công!';
		return view('user.createsuccess',compact('title'));

	}
	function createAcount()
	{
		$title='ĐĂNG KÍ TÀI KHOẢN';
		return view('user.createacount',compact('title'));
	}
	function login()
	{
		$title='ĐĂNG NHẬP TÀI KHOẢN';
		return view('user.login',compact('title'));
	}
	function postLogin(Request $request)
	{
		// $title='ĐĂNG NHẬP TÀI KHOẢN';
		// $title1='Thanh toán';
		$tenDangNhap=$request->input('tenDangNhap');
		$matKhau=md5($request->input('matKhau'));
		$admin=member::where('tenDangNhap', $tenDangNhap)->where('matKhau', $matKhau)->first();
		if($admin==null)
		{
			$alert='username or password wrong!';
			// return view('user.login', compact('alert','title'));
			return redirect()->back()->with(['alert'=>$alert]);
		}
		// $request->session()->put('user',$tenDangNhap);
		session(['user'=>$tenDangNhap]);
		return redirect('/');
	}
	function logout()
	{
		session()->flush('user');
		return redirect('login');
	}
	
	// gio hang
	function postOrderCart(Request $request)
	{
		$hoTen=$request->input('hoTen');
		$dienThoai=$request->input('dienThoai');
		$email=$request->input('email');
		$diaChi=$request->input('diaChi');
		$phuongThucThanhToan=$request->input('phuongThucThanhToan');
		$memberId=member::where('tenDangNhap',session('user'))->first()->id;
		donhang::insert(['memberId'=>$memberId,'hoTen'=>$hoTen,'dienThoai'=>$dienThoai,'email'=>$email,'diaChi'=>$diaChi,'phuongThucThanhToanID'=>$phuongThucThanhToan]);
		$orderID=donhang::orderBy('id','desc')->first()->id;
		foreach (array_keys(session('cart')) as $productId)
		{
			$quantity=session("cart.$productId");
			$price=sanpham::where('id',$productId)->first()->giaSanPham;
			orderDetails::insert(['orderId'=>$orderID,'productId'=>$productId,'quantity'=>$quantity,'price'=>$price]);
		}
		session()->forget('cart');
		$title='Đặt hàng thành công';
		return view('ordersuccess',compact('title'));

	}
	// function pay()
	// {
	// 	$title='Thanh toán';
	// 	$member=member::where('tenDangNhap',session('user'))->first();
	// 	$phuongThucThanhToans=phuongthucthanhtoan::where('status','1')->get();
	// 	return view('pay',compact('title','member','phuongThucThanhToans'));

	// }
	function orderCart()
	{
		$title='Thanh toán';
		if (!session('user'))
		{
			return redirect('login');
		}
		$member=member::where('tenDangNhap',session('user'))->first();
		$phuongThucThanhToans=phuongthucthanhtoan::where('status','1')->get();
		return view('pay',compact('title','member','phuongThucThanhToans'));	
	}
	function addToCart($id)
	{
		// $title='Giỏ hàng';
		if (!session("cart.$id"))
		{
			session(["cart.$id"=>1]);
		}
		else
		{
			session(["cart.$id"=>session("cart.$id")+1]);
		}
		return redirect('cart');
	}
	
	function viewCart()
	{
		$title='Giỏ hàng của bạn';
		return view('cart',compact('title'));
	}
	function delToCart($id)
	{
		session()->forget("cart.$id");
		return redirect()->back();
	}
	function delallCart()
	{
		session()->forget('cart');
		// session()->flush();
		return redirect()->back();
	}
	function updateCart(Request $request)
	{
		foreach (array_keys(session('cart')) as $key) 
		{
			session(["cart.$key"=>$request->input($key)]);
		}
		return redirect()->back();
	}
	

	//home
	function home()
	{
		$title='Tuân Mobile';
		// $sphams=DB::table('sanphams')->get();
		$sphams=sanpham::paginate(12);
		return view('home',compact('title','sphams'));
	}
	function chiTietSanPham($id)
	{
		$title='Chi tiet san pham';
		$sanpham=sanpham::findOrfail($id);
		return view('chitietsanpham',compact('title','sanpham'));
	}
	function getSanPham($tenHang,$id)
	{
		$title='Sản phẩm';
		$sanPham=sanpham::where('maHang',$id)->where('status','1')->get();
		return view('getsanpham',compact('title','sanPham'));
	}
	function searchMucGia($id)
	{
		$title='Mức giá';
		$mucgia=mucgia::where('status','1')->where('id',$id)->first();
		$sanPham=sanpham::where('giaSanPham','>=',$mucgia->mucGiaTu)->where('giaSanPham','<=',$mucgia->mucGiaDen)->where('status','1')->get();
		return view('getsanpham',compact('title','sanPham'));
	}
	function searchByName(Request $request)
	{
		$title='Search';
		$tenSanPham=$request->input('tenSanPham');
		$sanPham=sanpham::where('tenSanPham','like',"%$tenSanPham%")->where('status','1')->get();
		return view('getSanPhamName',compact('title','sanPham','tenSanPham'));
	}
	
	
}
