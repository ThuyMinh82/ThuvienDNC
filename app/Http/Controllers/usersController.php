<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\users; 
use App\phanquyen;
use App\usergroup;
use DB;
use Auth;
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
        $users->password = bcrypt(md5($request->password));
        $users->status=1;
        $users->usergroup_id = $request->usergroup_id;

        $users->save();
        return redirect('admin/users/danhsach')->with('thongbao', 'Thêm tài khoản thành công');
    }

    public function getThaydoi($id){
        $users = users::find($id);
        return view('admin.users.doimatkhau',['users'=>$users]);
    }

    public function postThaydoi(Request $request, $id){
        $users = users::find($id);
        $this -> validate ($request,[
            'password'=>'required|min:3|max:32',
        ],[
            'password.required'=>'Bạn chưa nhập Mật khẩu',
            'password.min'=>'Mật khẩu không được nhỏ hơn 3 ký tự',
            'password.max'=>'Mật khẩu không được lớn hơn 32 ký tự',
            'passwordAgain.required'=>'Bạn chưa nhập lại mật khẩu',
            'passwordAgain.same'=>'Mật khẩu nhập lại chưa khớp'

        ]);

        $users->password = bcrypt(md5($request->password)) ;
        $users->username = $users->username;
        $users->status=1;
        $users->usergroup_id = $users->usergroup_id;
        $users->save();
        return redirect('admin/users/doimatkhau/'.$id)->with('thongbao', 'Bạn đã sửa thành công');

    }

    public function getXoa($id){
        $users = users::find($id);
        $users->status = 0;
        $users->save();
        return redirect('admin/users/danhsach')->with('thongbao','Xóa thành công!');
    }

    public function getQuyen($id){
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
        return view('admin.login');
    }
    public function postloginAD(Request $Request){
        $username = $Request->username;
        $password = md5($Request->password);
        
        if(Auth::attempt(['username'=>$username,'password'=>$password]))
        {
            /*$user_id = Auth::user()->id;
            $usergroup_id = DB::table('users')->where('id',$user_id)->usergroup_id->get();
            $pq_id = DB::table('usergroup')->where('id',$usergroup_id)->pq_id->get();
            $ten_pq['ten_pq'] = DB::table('phanquyen')->where('id',$pq_id)->ten_pq->get();*/
            return redirect('trangchu');
        }
        else
        {
            Session::flash('thongbao', 'Tài khoản hoặc mật khẩu không chính xác');
            return view('admin.login');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('admin/login');
    }
}

