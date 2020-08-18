<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\users; 
use App\phanquyen;
use App\usergroup;
use DB;
session_start();
class usersController extends Controller
{
    //
    public function getThem(){
        $users = users::all();
        return view('admin.users.themtaikhoan',['users'=>$users]);
    }
    public function postThem(Request $request){
        $this -> validate ($request,[
            'username'=>'required|min:3',
            'password'=>'required|min:3|max:32',
            ''
        ],[
            'username.required'=>'Bạn chưa nhập Tên đăng nhập',
            'username.min'=>'Tên đăng nhập ít nhất 3 kí tự',
            'username.unique'=>'Tên đăng nhập đã tồn tại',
            'password.required'=>'Bạn chưa nhập Mật khẩu',
            'password.min'=>'Mật khẩu không được nhỏ hơn 3 ký tự',
            'password.max'=>'Mật khẩu không được lớn hơn 32 ký tự',
            'passwordAgain.required'=>'Bạn chưa nhập lại mật khẩu',
            'passwordAgain.same'=>'Mật khẩu nhập lại chưa khớp'

        ]);

        $users = new users;
        $users->username = $request->username;
        $users->password = bcrypt($request->password);
        $users->status=1;
        $users->usergroup_id = $request->usergroup_id;

        $users->save();
        return redirect('admin/users/themtaikhoan')->with('thongbao', 'Thêm tài khoản thành công');
    }

    public function getThaydoi(){
        $users = users::all();
    	return view('admin.users.doimatkhau',['users'=>$users]);
    }

    public function getXoa(){
    	return view('admin.users.xoataikhoan');
    }

    public function getQuyen(){
    	return view('admin.users.capquyen');
    }
    public function getDanhSach()
    {
        $users = users::orderBy('id','DESC')->paginate(5);
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
        $username = $Request->username;
        $password = md5($Request->password);

        $result = DB::table('users')->where('username',$username)->where('password',$password)->first();
        if($result){
            Session::put('username',$Request->username);
            Session::put('password',md5($Request->password));
            return redirect('trangchu');   
        }
        else{
            
            Session::flash('thongbao', 'Tài khoản hoặc mật khẩu không chính xác');
            return redirect('admin/login');
        }
    }
    public function logout(){
        return redirect('admin/login');

    }
}

