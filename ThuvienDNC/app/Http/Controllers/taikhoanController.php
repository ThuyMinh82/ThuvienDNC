<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class taikhoanController extends Controller
{
    //
     public function getThem(){
    	return view('admin.taikhoan.themtaikhoan');
    }

    public function getThaydoi(){
    	return view('admin.taikhoan.doimatkhau');
    }

    public function getXoa(){
    	return view('admin.taikhoan.xoataikhoan');
    }

    public function getQuyen(){
    	return view('admin.taikhoan.capquyen');
    }
    public function getDanhSach()
    {
        return view('admin.taikhoan.danhsachtaikhoan');
    }
}
