<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\baiviet;
use App\chudebv;

class HomeController extends Controller
{
    //
    function index(){
        $chudebv = chudebv::all();
        $baiviet = baiviet::where('status', 1)->paginate(10);
        return view('giaodien.index')->with('baiviet', $baiviet);

    }
    function gioithieu(){
    	return view('giaodien.gioithieu');

    }
    function tintuc(){
        $chudebv = chudebv::all();
        $baiviet = baiviet::where('cd_id', 1)->where('status', 1)->paginate(10);
        return view('giaodien.tintuc')->with('baiviet', $baiviet);

    }
    function lienhe(){
    	return view('giaodien.lienhe');

    }
    function sachtang(){
        $chudebv = chudebv::all();
        $baiviet = baiviet::where('cd_id', 6)->where('status', 1)->paginate(10);
        return view('giaodien.sachtang')->with('baiviet', $baiviet);

    }
    function goctanmansv(){
        $chudebv = chudebv::all();
        $baiviet = baiviet::where('cd_id', 8)->where('status', 1)->paginate(10);
        return view('giaodien.goctanmansv')->with('baiviet', $baiviet);

    }
    function getXemBaiViet($id){
        $chudebv = chudebv::all();
        $baiviet = baiviet::find($id);
        return view('giaodien.xembaiviet',['baiviet'=>$baiviet,'chudebv'=>$chudebv]);
    }
    function gioithieusach(){
        $chudebv = chudebv::all();
        $baiviet = baiviet::where('cd_id', 9)->where('status', 1)->paginate(10);
        return view('giaodien.gioithieusach')->with('baiviet', $baiviet);

    }

}
