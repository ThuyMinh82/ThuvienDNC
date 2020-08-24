<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\baiviet;
use App\chudebv;
use App\hinhanh;

class HomeController extends Controller
{
    //
    function index(){
        $chudebv = chudebv::all();
        $baiviet = baiviet::where('status','1')->orderBy('id','DESC')->paginate(5);
        $baiviet1 = baiviet::where('status','1')->orderBy('id','DESC')->take(5)->get();
        $hinhanh = hinhanh::orderBy('id','DESC')->take(4)->get();
        return view('giaodien.index',['baiviet1'=>$baiviet1,'hinhanh'=>$hinhanh])->with('baiviet', $baiviet);

    }
    function gioithieu(){
        $baiviet1 = baiviet::where('status','1')->orderBy('id','DESC')->take(5)->get();
    	return view('giaodien.gioithieu',['baiviet1'=>$baiviet1]);

    }
    function tintuc(){
        $chudebv = chudebv::all();
        $baiviet = baiviet::where('cd_id', 1)->where('status', 1)->paginate(5);
        $baiviet1 = baiviet::where('status','1')->orderBy('id','DESC')->take(5)->get();
        return view('giaodien.tintuc',['baiviet1'=>$baiviet1])->with('baiviet', $baiviet);

    }
    function lienhe(){
    	return view('giaodien.lienhe');

    }
    function sachtang(){
        $chudebv = chudebv::all();
        $baiviet = baiviet::where('cd_id', 6)->where('status', 1)->paginate(5);
        $baiviet1 = baiviet::where('status','1')->orderBy('id','DESC')->take(5)->get();
        return view('giaodien.sachtang',['baiviet1'=>$baiviet1])->with('baiviet', $baiviet);

    }
    function goctanmansv(){
        $chudebv = chudebv::all();
        $baiviet = baiviet::where('cd_id', 8)->where('status', 1)->paginate(5);
        $baiviet1 = baiviet::where('status','1')->orderBy('id','DESC')->take(5)->get();
        return view('giaodien.goctanmansv',['baiviet1'=>$baiviet1])->with('baiviet', $baiviet);

    }
    function getXemBaiViet($id){
        $chudebv = chudebv::all();
        $baiviet = baiviet::find($id);
        $baiviet1 = baiviet::where('status','1')->orderBy('id','DESC')->take(5)->get();
        return view('giaodien.xembaiviet',['baiviet'=>$baiviet,'baiviet1'=>$baiviet1,'chudebv'=>$chudebv]);
    }
    function gioithieusach(){
        $chudebv = chudebv::all();
        $baiviet = baiviet::where('cd_id', 9)->where('status', 1)->paginate(5);
        $baiviet1 = baiviet::where('status','1')->orderBy('id','DESC')->take(5)->get();
        return view('giaodien.gioithieusach',['baiviet1'=>$baiviet1])->with('baiviet', $baiviet);

    }

}
