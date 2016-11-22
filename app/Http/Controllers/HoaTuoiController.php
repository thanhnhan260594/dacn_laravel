<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DangnhapRequest;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\HoaTuoi;
use App\ChuDe;


class HoaTuoiController extends Controller {


	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}



	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function Index()
	{		
		$banner = DB::table('banner')->get();
		$danhmuc = DB::table('chu_de')->orderBy('Ma_CD', 'asc')->take(5)->get();
		$xuatxu = DB::table('xuat_xu')->orderBy('Ma_DD', 'asc')->take(5)->get();
		$giamgia = DB::table('hoa_tuoi')->orderBy('Giam_gia', 'desc')->take(4)->get();
		$layhoamoi = DB::table('hoa_tuoi')->orderBy('Ngay_cap_nhat','desc')->take(9)->get();				
		return view('Index',['banner' => $banner,'danhmuc' =>$danhmuc,'xuatxu' => $xuatxu,'giamgia' =>$giamgia,'layhoamoi' =>$layhoamoi]);
	}
	public function Hoatheochude($id)
	{
		$danhmuc = DB::table('chu_de')->orderBy('Ma_CD', 'asc')->take(5)->get();
		$xuatxu = DB::table('xuat_xu')->orderBy('Ma_DD', 'asc')->take(5)->get();
		$giamgia = DB::table('hoa_tuoi')->orderBy('Giam_gia', 'desc')->take(4)->get();
		$layhoatheoCD = DB::table('hoa_tuoi')->where('Ma_CD', '=', $id)->take(9)->get();
		return view('HoaTuoi.Hoatheochude',['danhmuc' =>$danhmuc,'xuatxu' => $xuatxu,'giamgia' =>$giamgia,'layhoatheoCD' => $layhoatheoCD]);
	}
	public function Hoatheoxuatxu($id)
	{
		$danhmuc = DB::table('chu_de')->orderBy('Ma_CD', 'asc')->take(5)->get();
		$xuatxu = DB::table('xuat_xu')->orderBy('Ma_DD', 'asc')->take(5)->get();
		$giamgia = DB::table('hoa_tuoi')->orderBy('Giam_gia', 'desc')->take(4)->get();
		$layhoatheoXX = DB::table('hoa_tuoi')->where('Ma_DD', '=', $id)->take(6)->get();
		return view('HoaTuoi.Hoatheoxuatxu',['danhmuc' =>$danhmuc,'xuatxu' => $xuatxu,'giamgia' =>$giamgia,'layhoatheoXX' => $layhoatheoXX]);
	}
	public function Chitietsanpham($id)
	{
		$danhmuc = DB::table('chu_de')->orderBy('Ma_CD', 'asc')->take(5)->get();
		$xuatxu = DB::table('xuat_xu')->orderBy('Ma_DD', 'asc')->take(5)->get();
		$giamgia = DB::table('hoa_tuoi')->orderBy('Giam_gia', 'desc')->take(4)->get();

		// Lay chi tiet san pham theo Ma_hoa
		$Chitietsp = HoaTuoi::find($id);

		// Lay san pham lien quan cung chu de
		$sanphamlienquan = $Chitietsp->chude->hoatuoi->all();
		
		return view('HoaTuoi.Chitietsanpham',['danhmuc' =>$danhmuc,'xuatxu' => $xuatxu,'giamgia' =>$giamgia,'Chitietsp' => $Chitietsp,'sanphamlienquan' =>$sanphamlienquan]);
	}
	function getDangnhap()
	{
		$banner = DB::table('banner')->get();
		$danhmuc = DB::table('chu_de')->orderBy('Ma_CD', 'asc')->take(5)->get();
		$xuatxu = DB::table('xuat_xu')->orderBy('Ma_DD', 'asc')->take(5)->get();
		$giamgia = DB::table('hoa_tuoi')->orderBy('Giam_gia', 'desc')->take(4)->get();
		return view('HoaTuoi.Dangnhap',['banner' => $banner,'danhmuc' =>$danhmuc,'xuatxu' => $xuatxu,'giamgia' =>$giamgia]);
	}
	function postDangnhap(DangnhapRequest $request)
	{
		$dangnhap = [
			'username' => $request->txtUser, 
			'password' => $request->txtPass
		];
		if (Auth::attempt($login)) {

            return redirect()->intended('dashboard');
        }
        else
        {
			return redirect()->back();
        }
	}
	function getDangky()
	{
		$banner = DB::table('banner')->get();
		$danhmuc = DB::table('chu_de')->orderBy('Ma_CD', 'asc')->take(5)->get();
		$xuatxu = DB::table('xuat_xu')->orderBy('Ma_DD', 'asc')->take(5)->get();
		$giamgia = DB::table('hoa_tuoi')->orderBy('Giam_gia', 'desc')->take(4)->get();
		return view('HoaTuoi.Dangky',['banner' => $banner,'danhmuc' =>$danhmuc,'xuatxu' => $xuatxu,'giamgia' =>$giamgia]);
	}
	function postDangky(Request $request)
	{
		$this->validate($request,[
			'username'=>'required|min:3',
			'email'=>'required|unique:users,email',
			'name'=>'required|max:50',
			'password'=>'required|min:3|max:20'
			]);
		$banner = DB::table('banner')->get();
		$danhmuc = DB::table('chu_de')->orderBy('Ma_CD', 'asc')->take(5)->get();
		$xuatxu = DB::table('xuat_xu')->orderBy('Ma_DD', 'asc')->take(5)->get();
		$giamgia = DB::table('hoa_tuoi')->orderBy('Giam_gia', 'desc')->take(4)->get();
		return view('HoaTuoi.Dangky',['banner' => $banner,'danhmuc' =>$danhmuc,'xuatxu' => $xuatxu,'giamgia' =>$giamgia]);
	}
	function Gioithieu()
	{
		$banner = DB::table('banner')->get();
		$danhmuc = DB::table('chu_de')->orderBy('Ma_CD', 'asc')->take(5)->get();
		$xuatxu = DB::table('xuat_xu')->orderBy('Ma_DD', 'asc')->take(5)->get();
		$giamgia = DB::table('hoa_tuoi')->orderBy('Giam_gia', 'desc')->take(4)->get();
		return view('HoaTuoi.Gioithieu',['banner' => $banner,'danhmuc' =>$danhmuc,'xuatxu' => $xuatxu,'giamgia' =>$giamgia]);
	}
	function Lienhe()
	{
		$banner = DB::table('banner')->get();
		$danhmuc = DB::table('chu_de')->orderBy('Ma_CD', 'asc')->take(5)->get();
		$xuatxu = DB::table('xuat_xu')->orderBy('Ma_DD', 'asc')->take(5)->get();
		$giamgia = DB::table('hoa_tuoi')->orderBy('Giam_gia', 'desc')->take(4)->get();
		return view('HoaTuoi.Lienhe',['banner' => $banner,'danhmuc' =>$danhmuc,'xuatxu' => $xuatxu,'giamgia' =>$giamgia]);
	}
}
