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

