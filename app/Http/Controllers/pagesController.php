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
        if(Auth::check()){
            $usergroup_id = Auth::user()->usergroup_id;
            $usergroup = usergroup::where('id',$usergroup_id)->first();
            $pq_id = $usergroup->pq_id;
            $phanquyen = phanquyen::where('id',$pq_id)->first();
            $ten_pq['ten_pq'] = $phanquyen->ten_pq;
            return view('pages.index', $ten_pq);
        }
        else
            return view('pages.index');
    }
}
