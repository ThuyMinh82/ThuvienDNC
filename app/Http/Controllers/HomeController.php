<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\baiviet;
use App\chudebv;

class HomeController extends Controller
{
    //
    function index(){
    	return view('giaodien.index');

    }
    function gioithieu(){
    	return view('giaodien.gioithieu');

    }
    function tintuc(){
    	return view('giaodien.tintuc');

    }
    function lienhe(){
    	return view('giaodien.lienhe');

    }
    function getXemBaiViet($id){
        $chudebv = chudebv::all();
        $baiviet = baiviet::find($id);
    	return view('giaodien.xembaiviet',['baiviet'=>$baiviet,'chudebv'=>$chudebv]);
    }
}
