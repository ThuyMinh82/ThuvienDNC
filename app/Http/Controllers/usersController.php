<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users; 
use App\phanquyen;
use App\usergroup;
class usersController extends Controller
{
    //
    public function getThem(){
    	return view('admin.users.themtaikhoan');
    }

    public function getThaydoi(){
    	return view('admin.users.doimatkhau');
    }

    public function getXoa(){
    	return view('admin.users.xoataikhoan');
    }

    public function getQuyen(){
    	return view('admin.users.capquyen');
    }
    public function getDanhSach()
    {
        $users = users::all();
        return view('admin.users.danhsachtaikhoan',['users'=>$users]);
    }
    public function getIndex()
    {
        $users = users::all();
        return view('admin.users.index',['users'=>$users]);
    }
}

