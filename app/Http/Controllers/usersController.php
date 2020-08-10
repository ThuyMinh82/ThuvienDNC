<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        return view('admin.users.danhsach',['users'=>$users]);
    }
    public function getIndex()
    {
        $users = users::all();
        return view('admin.users.index',['users'=>$users]);
    }

    public function getloginAD(){
        $users = users::all();
        return view('admin.login',['users'=>$users]);
    }
    public function postloginAD(Request $Request){
        $this -> validate ($Request,[
            'username'=>'required',
            'password'=>'required|min:3|max:32'
        ],[
            'username.required'=>'Bạn chưa nhập username',
            'password.required'=>'Bạn chưa nhập mật khẩu',
            'password.min'=>'password không được nhỏ hơn 3 ký tự',
            'password.max'=>'password không được lớn hơn 32 ký tự',
        ]);
        if(Auth::attempt(['username'=>$Request->username,'password'=>$Request->password])){
            return redirect('admin/chudebv/danhsach');
        }
        else{
            return redirect('admin/dangnhap')-> with ('thongbao','Đăng nhập không thành công');
        }
    }
}

