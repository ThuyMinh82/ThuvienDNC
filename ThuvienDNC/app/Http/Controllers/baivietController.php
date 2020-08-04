<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chudebv;
use App\baiviet;

class baivietController extends Controller
{
    //
     public function getThem(){
    	return view('admin.baiviet.thembv');
    }

    public function getSua(){
    	return view('admin.baiviet.suabv');
    }

    public function getXoa(){
    	return view('admin.baiviet.xoabv');
    }

    public function getDuyet(){
        return view('admin.baiviet.duyetbv');
    }

    public function getDanhSach()
    {
        $baiviet = baiviet::all();
        return view('admin.baiviet.danhsachbv',['baiviet'=>$baiviet]);
    }
}
