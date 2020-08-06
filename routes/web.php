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

// Route::get('/admin','admin_controller@loginad');
// Route::get('/admin_index','admin_controller@index');

Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'chudebv'],function(){
		//admin/chudebv/themchude
		Route::get('themchude','chudebvController@getThem');
		Route::post('themchude','chudebvController@postThem');
		
		Route::get('suachude/{id}','chudebvController@getSua');
	    Route::post('suachude/{id}','chudebvController@postSua');
	    
	    Route::get('xoachude/{id}','chudebvController@getXoa');

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

	Route::group(['prefix'=>'users'],function(){
		Route::get('themtaikhoan','usersController@getThem');

		Route::get('doimatkhau','usersController@getThaydoi');

		Route::get('xoataikhoan','usersController@getXoa');

		Route::get('capquyen','usersController@getQuyen');

		Route::get('danhsachtaikhoan','usersController@getDanhSach');

		Route::get('index','usersController@getIndex');
	});

	Route::group(['prefix'=>'profileuser'],function(){

		Route::get('prouser','profileuserController@getIndex');
	});
	
});

Route::get('trangchu','pagesController@index');
