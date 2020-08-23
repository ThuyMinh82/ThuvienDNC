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
        $hinhanh = hinhanh::all();
        $chudebv = chudebv::all();
        $baiviet = baiviet::where('status','1')->orderBy('id','DESC')->paginate(5);
        $baiviet1 = baiviet::where('status','1')->orderBy('id','DESC')->take(5);
        return view('giaodien.index',['baiviet1'=>$baiviet1])->with('baiviet', $baiviet)->with('hinhanh',$hinhanh);

    }
    function gioithieu(){
        $chudebv = chudebv::all();
        $baiviet = baiviet::where('status','1')->orderBy('id','DESC')->paginate(5);
        $baiviet1 = baiviet::where('status','1')->orderBy('id','DESC')->take(5)->paginate(5);
    	return view('giaodien.gioithieu');

    }
    function tintuc(){
        $chudebv = chudebv::all();
        $baiviet = baiviet::where('cd_id', 1)->where('status', 1)->paginate(5);
        $baiviet1 = baiviet::where('status','1')->orderBy('id','DESC')->take(5)->paginate(5);
        return view('giaodien.tintuc',['baiviet1'=>$baiviet1])->with('baiviet', $baiviet);

    }
    function lienhe(){
    	return view('giaodien.lienhe');

    }
    function sachtang(){
        $chudebv = chudebv::all();
        $baiviet = baiviet::where('cd_id', 6)->where('status', 1)->paginate(5);
        $baiviet1 = baiviet::where('status','1')->orderBy('id','DESC')->take(5)->paginate(5);
        return view('giaodien.sachtang',['baiviet1'=>$baiviet1])->with('baiviet', $baiviet);

    }
    function goctanmansv(){
        $chudebv = chudebv::all();
        $baiviet = baiviet::where('cd_id', 8)->where('status', 1)->paginate(5);
        $baiviet1 = baiviet::where('status','1')->orderBy('id','DESC')->take(5)->paginate(5);
        return view('giaodien.goctanmansv',['baiviet1'=>$baiviet1])->with('baiviet', $baiviet);

    }
    function getXemBaiViet($id){
        $chudebv = chudebv::all();
        $baiviet = baiviet::find($id);
        $baiviet1 = baiviet::where('status','1')->orderBy('id','DESC')->take(5)->paginate(5);
        return view('giaodien.xembaiviet',['baiviet'=>$baiviet,'baiviet1'=>$baiviet1,'chudebv'=>$chudebv]);
    }
    function gioithieusach(){
        $chudebv = chudebv::all();
        $baiviet = baiviet::where('cd_id', 9)->where('status', 1)->paginate(5);
        $baiviet1 = baiviet::where('status','1')->orderBy('id','DESC')->take(5)->paginate(5);
        return view('giaodien.gioithieusach',['baiviet1'=>$baiviet1])->with('baiviet', $baiviet);

    }

}
