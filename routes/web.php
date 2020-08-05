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

Route::get('thu', function () {
     return view('admin.taikhoan.user_add');
});
// Route::get('/admin','admin_controller@loginad');
// Route::get('/admin_index','admin_controller@index');

Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'chudebv'],function(){
		//admin/chudebv/themchude
		Route::get('themchude','chudebvController@getThem');
		Route::post('themchude','chudebvController@postThem');
		
		Route::get('suachude','chudebvController@getSua');
		Route::get('xoachude','chudebvController@getXoa');
		Route::get('danhsach','chudebvController@getDanhSach');
		
	});

	Route::group(['prefix'=>'baiviet'],function(){
		Route::get('thembv','baivietController@getThem');
		Route::get('suabv','baivietController@getSua');
		Route::get('xoabv','baivietController@getXoa');
		Route::get('duyetbv','baivietController@getDuyet');
		Route::get('danhsachbv','baivietController@getDanhSach');
	});
	Route::group(['prefix'=>'hinhanh'],function(){
		Route::get('themhinhanh','hinhanhController@getThem');
		Route::get('xoahinhanh','hinhanhController@getXoa');
	});

	Route::group(['prefix'=>'taikhoan'],function(){
		Route::get('themtaikhoan','taikhoanController@getThem');
		Route::get('doimatkhau','taikhoanController@getThaydoi');
		Route::get('xoataikhoan','taikhoanController@getXoa');
		Route::get('capquyen','taikhoanController@getQuyen');
		Route::get('danhsachtaikhoan','taikhoanController@getDanhSach');
	});
	
});


