<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\admin;
use App\hangsanxuat;
use App\mucgia;
use App\sanpham;
use App\tintuc;
use App\donhang;
use App\member;
use App\orderDetails;
use App\lienhe;

class AController extends Controller
{
	// thành viên
	function delThanhVien($id)
	{
		member::where('id',$id)->delete();
		donhang::where('memberId',$id)->delete();
		return redirect()->back();
	}
	function thanhVien()
	{
		$title='THÀNH VIÊN';
		$memBers=member::orderBy('id','desc')->get();
		return view('admin.member.member',compact('title','memBers'));
	}

	//liên hệ(contact)
	function delContact($id)
	{
		lienhe::where('id',$id)->delete();
		return redirect()->back();
	}
	function contactDetailPost($id,Request $request)
	{
		lienhe::where('id',$id)->update(['status'=>$request->input('status')]);
		$alert='Chuyển trạng thái thành công';
		return redirect()->back()->with(['alert'=>$alert]);
	}
	function contactDetail($id)
	{
		$title='CHI TIẾT LIÊN HỆ';
		$conTact=lienhe::where('id',$id)->first();
		return view('admin.lienhe.contactDetail',compact('title','conTact'));
	}
	function conTact($status)
	{
		if($status=='1')
		{
			$title='Liên hệ chưa xử lý';
			$contacts=lienhe::where('status','1')->get();
		}
		else
		{
			$title='Liên hệ đã xử lý';
			$contacts=lienhe::where('status','2')->get();
		}
		return view('admin.lienhe.contact',compact('title','contacts'));
	}
	//Đơn hàng(order)
	function orderDetailPost($id, Request $request)
	{
		donhang::where('id',$id)->update(['status'=>$request->input('status')]);
		$alert='Đã chuyển trạng thái thành công';
		return redirect()->back()->with(['alert'=>$alert]);
	}
	function orderDetail($id)
	{
		$title='Chi tiết đơn hàng';
		$order=db::table('members as a')->join('don_hangs as b','a.id','b.memberId')->select('a.hoTen as hoTenNguoiDat','a.dienThoai as dienThoaiNguoiDat','a.email as emailNguoiDat','a.diaChi as diachiNguoiDat','b.*')->where('b.id',$id)->first();
		$sanPhams=db::table('don_hangs as a')->join('order_details as b','a.id','b.orderId')->join('sanphams as c','b.productId','c.id')->join('hangsanxuats as d','c.maHang','d.id')->where('a.id',$id)->get();
		$phuongThuc=db::table('phuong_thuc_thanh_toans as a')->join('don_hangs as b','a.id','b.phuongThucThanhToanId')->where('b.id',$id)->first()->phuongThuc;
		return view('admin.order.detailorder',compact('title','order','phuongThuc','sanPhams'));
	}
	function order($status)
	{	
		if ($status=='1')
		{
			$title='Đơn hàng chưa xử lý';
			$orders=donhang::where('status','1')->orderBy('id','desc')->get();
		}
		else if ($status=='2')
		{
			$title='Đơn hàng đang xử lý';
			$orders=donhang::where('status','2')->orderBy('id','desc')->get();
		}
		else
		{
			$title='Đơn hàng đã xử lý';
			$orders=donhang::where('status','3')->orderBy('id','desc')->get();
		}
		return view('admin.order.order',compact('title','orders'));
	}
	function delOrder($id)
	{
		orderDetails::where('orderId',$id)->delete();
		donhang::where('id',$id)->delete();
		return redirect()->back();
	}
	//tin tuc
	function tintuc()
	{
		$title='TIN TỨC';
		$tintucs=tintuc::orderBy('id','desc')->get();
		return view('admin.tintuc.news',compact('title','tintucs'));
	}
	function themtintuc()
	{
		$title='THÊM TIN TỨC';
		return view('admin.tintuc.themtintuc',compact('title'));
	}
	function postthemtintuc(Request $request)
	{
		$anhTinTuc=$request->input('anhTinTuc');
		$tieuDe=$request->input('tieuDe');
		$ngayDang=$request->input('ngayDang');
		$moTa=$request->input('moTa');
		$status=$request->input('status');
		$ktratrungtieude=tintuc::where('tieuDe',$tieuDe)->get();
		if (count($ktratrungtieude)>0)
		{
			$alert='Tên này đã có sẵn';
			return redirect()->back()->with(['alert'=>$alert]);
		}
		tintuc::insert(['anhTinTuc'=>$anhTinTuc,'tieuDe'=>$tieuDe,'ngayDang'=>$ngayDang,'moTa'=>$moTa,'status'=>$status]);
		return redirect('admin/tintuc');
	}
	function xoatintuc($id)
	{
		tintuc::where('id',$id)->delete();
		return redirect()->back();
	}
	function suatintuc($id)
	{
		$title='SỬA TIN TỨC';
		$tintucs=tintuc::find($id);
		return view('admin.tintuc.suatintuc',compact('title','tintucs'));
	}
	function postsuatintuc($id, Request $request)
	{
		$anhTinTuc=$request->input('anhTinTuc');
		$tieuDe=$request->input('tieuDe');
		$ngayDang=$request->input('ngayDang');
		$moTa=$request->input('moTa');
		$status=$request->input('status');
		$ktratrungtieude=tintuc::where('tieuDe',$tieuDe)->get();
		if (count($ktratrungtieude)>0)
		{
			$alert='Tên này đã có sẵn';
			return redirect()->back()->with(['alert'=>$alert]);
		}
		tintuc::where('id',$id)->update(['anhTinTuc'=>$anhTinTuc,'tieuDe'=>$tieuDe,'ngayDang'=>$ngayDang,'moTa'=>$moTa,'status'=>$status]);
		return redirect('admin/tintuc');
	}
 	//admin
	function admin()
	{
		if (session('admin'))
			return view('admin.controlpanel');
		return view('admin.login');

	}
	function postLogin(Request $request)
	{
		$username=$request->input('username');
		$password=md5($request->input('password'));
		$admin=admin::where('username',$username)->where('password',$password)->first();
		if ($admin==null)
		{
			$alert='username or password wrong!';
			return view('admin.login', compact('alert'));
		}
		$request->session()->put('admin',$username);
		return redirect('admin/controlpanel');

	}
	function controlpanel()
	{
		return view('admin.controlpanel');
	}
	function logout()
	{
		session()->flush('admin');
		return redirect('admin');
	}

	//hang san xuat
	function hangsanxuat()
	{
		$title='HÃNG SẢN XUẤT';
		$hangs=hangsanxuat::orderBy('id','desc')->get();
		return view('admin.hangsanxuat.hangsanxuat',compact('title','hangs'));
	}
	function themhang()
	{
		$title='THÊM HÃNG';
		return view('admin.hangsanxuat.themhang',compact('title'));
	}
	function postthemhang(Request $request)
	{
		$tenHang=$request->input('tenHang');
		$status=$request->input('status');
		$ktratrungtenhang=hangsanxuat::where('tenHang',$tenHang)->get();
		if(count($ktratrungtenhang)>0)
		{
			$alert='Tên này đã có sẵn';
			return redirect()->back()->with(['alert'=>$alert]);
		}
		hangsanxuat::insert(['tenHang'=>$tenHang,'status'=>$status]);
		return redirect('admin/hangsanxuat');
	}
	function xoahang($id)
	{
		hangsanxuat::where('id',$id)->delete();
		return redirect()->back();
	}
	function suahang($id)
	{
		$title='SỬA HÃNG';
		$hang=hangsanxuat::find($id);
		return view('admin.hangsanxuat.suahang',compact('title','hang'));
	}
	function postsuahang($id, Request $request)
	{
		$tenHang=$request->input('tenHang');
		$status=$request->input('status');
		$ktratrungtenhang=hangsanxuat::where('tenHang',$tenHang)->where('id','!=',$id)->get();
		if (count($ktratrungtenhang)>0)
		{
			$alert='Tên này đã có sẵn';
			return redirect()->back()->with(['alert'=>$alert]);
		}
		hangsanxuat::where('id',$id)->update(['tenHang'=>$tenHang,'status'=>$status]);
		return redirect('admin/hangsanxuat');
	}
	//mức giá
	function mucgia()
	{
		$title='MỨC GIÁ';
		$gias=mucgia::orderBy('id','desc')->get();
		return view('admin.mucgia.mucgia',compact('title','gias'));
	}
	function themgia()
	{
		$title='THÊM GIÁ';
		return view('admin.mucgia.themgia',compact('title'));
	}
	function postthemgia(Request $request)
	{
		$tenMucGia=$request->input('tenMucGia');
		$mucGiaTu=$request->input('mucGiaTu');
		$mucGiaDen=$request->input('mucGiaDen');
		$status=$request->input('status');
		$ktratrungtenMG=mucgia::where('tenMucGia',$tenMucGia)->get();
		if (count($ktratrungtenMG)>0)
		{
			$alert='Tên mức giá này đã có sẵn';
			return redirect()->back()->with(['alert'=>$alert]);
		}
		mucgia::insert(['tenMucGia'=>$tenMucGia,'mucGiaTu'=>$mucGiaTu,'mucGiaDen'=>$mucGiaDen,'status'=>$status]);
		return redirect('admin/mucgia');
	}
	function xoagia($id)
	{
		mucgia::where('id',$id)->delete();
		return redirect()->back();
	}
	function suagia($id)
	{
		$title='SỬA GIÁ';
		$gia=mucgia::find($id);
		return view('admin.mucgia.suagia',compact('title','gia'));
	}
	function postsuagia($id, Request $request)
	{
		$tenMucGia=$request->input('tenMucGia');
		$mucGiaTu=$request->input('mucGiaTu');
		$mucGiaDen=$request->input('mucGiaDen');
		$status=$request->input('status');
		$ktratrungtenMG=mucgia::where('tenMucGia',$tenMucGia)->where('id','!=',$id)->get();
		if (count($ktratrungtenMG)>0)
		{
			$alert='Tên mức giá này đã có sẵn';
			return redirect()->back()->with(['alert'=>$alert]);
		}
		mucgia::where('id',$id)->update(['tenMucGia'=>$tenMucGia,'mucGiaTu'=>$mucGiaTu,'mucGiaDen'=>$mucGiaDen,'status'=>$status]);
		
		return redirect('admin/mucgia');
	}
	// sản phẩm
	function sanpham()
	{
		$title='SẢN PHẨM';
		// $sanphams=sanpham::orderBy('id','desc')->get();
		$sanphams=db::table('sanphams as a')->join('hangsanxuats as b','a.maHang','b.id')->select('a.*','tenHang')->orderBy('id','desc')->paginate(6);
		return view('admin.sanpham.sanpham',compact('title','sanphams'));
	}
	function themsanpham()
	{
		$title='THÊM SẢN PHẨM';
		$hang=hangsanxuat::all();
		return view('admin.sanpham.themsanpham',compact('title','hang'));
	}
	function postthemsanpham(Request $request)
	{
		$maHang=$request->input('maHang');
		$tenSanPham=$request->input('tenSanPham');
		$anhSanPham=$request->file('anhSanPham');
		$giaSanPham=$request->input('giaSanPham');
		$moTa=$request->input('moTa');
		$status=$request->input('status');
		$ktratrungtenSP=sanpham::where('tenSanPham',$tenSanPham)->get();
		if (count($ktratrungtenSP)>0)
		{
			$alert='Tên sản phẩm này đã có sẵn';
			return redirect()->back()->with(['alert'=>$alert]);
		}
		$anh=time().'_'.$anhSanPham->getClientOriginalName();
		$extension=substr($anh,strlen($anh)-3);
		$extension4=substr($anh,strlen($anh)-4);
		if ($extension=='png'||$extension=='PNG'||$extension=='jpg'||$extension=='JPG'||$extension=='gif'||$extension=='GIF'||$extension4=='jpeg'||$extension4=='JPEG')
		{
			$anhSanPham->move('public/img',$anh);
			sanpham::insert(['maHang'=>$maHang,'tenSanPham'=>$tenSanPham,'anhSanPham'=>$anh,'giaSanPham'=>$giaSanPham,'moTa'=>$moTa,'status'=>$status]);
		} else {
			$alert='file không đúng định dạng!';
			return redirect()->back()->with(['alert'=>$alert]);
		}
		return redirect('admin/sanpham');
	}
	function xoasanpham($id)
	{
		sanpham::where('id',$id)->delete();
		return redirect()->back();
	}
	function suasanpham($id)
	{
		$title='SỬA SẢN PHẨM';
		$sanpham=sanpham::find($id);
		$hang=hangsanxuat::all();
		return view('admin.sanpham.suasanpham',compact('title','sanpham','hang'));
	}
	function postsuasanpham($id, Request $request)
	{
		$maHang=$request->input('maHang');
		$tenSanPham=$request->input('tenSanPham');
		$anhSanPham=$request->input('anhSanPham');
		$giaSanPham=$request->input('giaSanPham');
		$moTa=$request->input('moTa');
		$status=$request->input('status');
		$ktratrungtenSP=sanpham::where('tenSanPham',$tenSanPham)->where('id','!=',$id)->get();
		if (count($ktratrungtenSP)>0)
		{
			$alert='Tên mức giá này đã có sẵn';
			return redirect()->back()->with(['alert'=>$alert]);
		}
		sanpham::where('id',$id)->update(['maHang'=>$maHang,'tenSanPham'=>$tenSanPham,'anhSanPham'=>$anhSanPham,'giaSanPham'=>$giaSanPham,'moTa'=>$moTa,'status'=>$status]);
		return redirect('admin/sanpham');
	}
}
