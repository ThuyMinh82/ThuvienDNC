<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hinhanhController extends Controller
{
    //
     public function getThem(){
    	return view('admin.hinhanh.themhinhanh');
    }

    public function getXoa(){
    	return view('admin.hinhanh.xoahinhanh');
    }
}
