<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 use App\chudebv;
 Route::get('/', function () {
     return view('welcome');
 });

Route::get('xembaiviet/{id}','HomeController@getXemBaiViet');
Route::get('home','HomeController@index');
Route::get('giaodien/gioithieu','HomeController@gioithieu');
Route::get('giaodien/tintuc','HomeController@tintuc');
Route::get('giaodien/lienhe','HomeController@lienhe');
Route::get('giaodien/sachtang','HomeController@sachtang');
Route::get('giaodien/goctanmansv','HomeController@goctanmansv');
Route::get('xembaiviet/{id}','HomeController@getXemBaiViet');


Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'chudebv'],function(){
		//admin/chudebv/themchude
		Route::get('themchude','chudebvController@getThem');
		Route::post('themchude','chudebvController@postThem');
		Route::get('danhsach/search','chudebvController@getDanhSachSearch');
		Route::get('suachude/{id}','chudebvController@getSua');
	    Route::post('suachude/{id}','chudebvController@postSua');
	    
	    Route::get('xoachude/{id}','chudebvController@getXoa');

		Route::get('danhsach','chudebvController@getDanhSach');
		
	});

	Route::group(['prefix'=>'baiviet'],function(){
		Route::get('danhsach','baivietController@getDanhSach');
		Route::get('thembv','baivietController@getThem');
		Route::post('thembv','baivietController@postThem');
		Route::get('suabv/{id}','baivietController@getSua');
		Route::post('suabv/{id}','baivietController@postSua');
		Route::get('xoabv/{id}','baivietController@getXoa');
		Route::get('duyetbv/{id}','baivietController@getDuyet');
		Route::get('danhsachchuaduyet','baivietController@getDanhSachChuaDuyet');
		Route::get('xembaiviet/{id}','baivietController@getXemBV');
		Route::get('danhsach/search','baivietController@getDSBVSearch');
		Route::get('danhsachchuaduyet/search','baivietController@getDSBVCDSearch');
	});
	Route::group(['prefix'=>'hinhanh'],function(){
		Route::get('themhinhanh','hinhanhController@getThem');
		Route::post('themhinhanh','hinhanhController@postThem');
		Route::get('xoahinhanh/{id}','hinhanhController@getXoa');
		Route::get('suahinhanh/{id}','hinhanhController@getSua');
		Route::post('suahinhanh/{id}','hinhanhController@postSua');
		Route::get('danhsach','hinhanhController@getDanhsach');
		Route::get('danhsach/search','hinhanhController@getDanhSachSearch');
	});

	Route::group(['prefix'=>'users'],function(){
		Route::get('themtaikhoan','usersController@getThem');
		Route::post('themtaikhoan','usersController@postThem');
		Route::get('doimatkhau/{id}','usersController@getDoiMK');
		Route::post('doimatkhau/{id}','usersController@postDoiMK');
		Route::get('xoataikhoan/{id}','usersController@getXoa');
		Route::get('capquyen/{id}','usersController@getQuyen');
		Route::post('capquyen/{id}','usersController@postQuyen');
		Route::get('danhsach','usersController@getDanhSach');
		Route::get('xemthongtin/{id}','usersController@getXemThongTin');
		Route::get('danhsachdaxoa','usersController@getDanhSachDaXoa');
		Route::get('phuchoitaikhoan/{id}','usersController@getPhucHoi');
		Route::get('danhsach/search','usersController@getDanhSachSearch');
		Route::get('danhsachdaxoa/search','usersController@getDSDXSearch');
	});

	Route::group(['prefix'=>'profileuser'],function(){

		Route::get('prouser/','profileuserController@getIndex');
		Route::get('thaydoi/{id}','profileuserController@getThaydoi');
		Route::post('thaydoi/{id}','profileuserController@postThaydoi');
		Route::get('them','profileuserController@getThem');
		Route::post('them','profileuserController@postThem');
	});
	
});

Route::get('trangchu','pagesController@index');
Route::get('admin/login','usersController@getloginAD');
Route::post('admin/login','usersController@postloginAD');
Route::get('logout','usersController@logout');

