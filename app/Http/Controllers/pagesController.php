<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\phanquyen;
use App\usergroup;
use App\baiviet;
use DB;
class pagesController extends Controller
{
    //
    function index(){
        $usergroup_id = Auth::user()->usergroup_id;
        $usergroup = usergroup::where('id',$usergroup_id)->first();
        $pq_id = $usergroup->pq_id;
        $phanquyen = phanquyen::where('id',$pq_id)->first();
        $ten_pq['ten_pq'] = $phanquyen->ten_pq;
    	return view('pages.index', $ten_pq);
    }
    function timkiem(Request $request){
    	$tukhoa = $request->tukhoa;
    	$baiviet = baiviet::where('ten_bv','like',"%$tukhoa%")->take(5);
    	return view('pages.timkiem',['baiviet'=>$baiviet,'tukhoa'=>$tukhoa]);

    }
}
