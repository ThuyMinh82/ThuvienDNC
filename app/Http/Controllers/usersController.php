<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\users; 
use App\phanquyen;
use App\usergroup;
use App\profileuser;
use DB;
use Illuminate\Support\Facades\Auth;
session_start();
class usersController extends Controller
{
    //
    public function getThem(){
        $users = users::all();

        if(Auth::check())
        {
            $usergroup_id = Auth::user()->usergroup_id;
            $usergroup = usergroup::where('id',$usergroup_id)->first();
            $pq_id = $usergroup->pq_id;
            $phanquyen = phanquyen::where('id',$pq_id)->first();
            $ten_pq['ten_pq'] = $phanquyen->ten_pq;
            return view('admin.users.themtaikhoan',$ten_pq,['users'=>$users]);
        }
        else
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

    public function getDoiMK($id){
        $users = users::find($id);

        if(Auth::check())
        {
            $usergroup_id = Auth::user()->usergroup_id;
            $usergroup = usergroup::where('id',$usergroup_id)->first();
            $pq_id = $usergroup->pq_id;
            $phanquyen = phanquyen::where('id',$pq_id)->first();
            $ten_pq['ten_pq'] = $phanquyen->ten_pq;
            return view('admin.users.doimatkhau',$ten_pq,['users'=>$users]);
        }
        else
            return view('admin.users.doimatkhau',['users'=>$users]);

        
    }

    public function postDoiMK(Request $request, $id){
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
        #$pw = $users->password;
        #$oldpw = bcrypt(md5($request->oldpassword));
        #if($pw == $oldpw)
        #{
            $users->password = bcrypt(md5($request->password)) ;
            $users->username = $users->username;
            $users->status=1;
            $users->usergroup_id = $users->usergroup_id;
            $users->save();
            return redirect('admin/users/danhsach')->with('thongbao', 'Bạn đã đổi thành công');
        #}
        #else
         #   return redirect('admin/users/doimatkhau/'.$id)->with('thongbao', 'Bạn đã nhập sai mật khẩu hiện tại');

    }

    public function getXoa($id){
        $users = users::find($id);
        $users->status = 0;
        $users->save();
        return redirect('admin/users/danhsach')->with('thongbao','Xóa thành công!');
    }

    public function getQuyen($id){
        $users = users::find($id);

        if(Auth::check())
        {
            $usergroup_id = Auth::user()->usergroup_id;
            $usergroup = usergroup::where('id',$usergroup_id)->first();
            $pq_id = $usergroup->pq_id;
            $phanquyen = phanquyen::where('id',$pq_id)->first();
            $ten_pq['ten_pq'] = $phanquyen->ten_pq;
            return view('admin.users.capquyen',$ten_pq,['users'=>$users]);
        }
        else
        return view('admin.users.capquyen',['users'=>$users]);
    }

    public function postQuyen(Request $request, $id){
        $users = users::find($id);
        
        $users->password = $users->password;
        $users->username = $users->username;
        $users->status=1;
        $users->usergroup_id = $request->usergroup_id;
        $users->save();
        return redirect('admin/users/danhsach')->with('thongbao', 'Bạn đã sửa thành công');
    }
    
    public function getDanhSach()
    {
        $users = users::orderBy('id','DESC')->paginate(5);

        if(Auth::check())
        {
            $usergroup_id = Auth::user()->usergroup_id;
            $usergroup = usergroup::where('id',$usergroup_id)->first();
            $pq_id = $usergroup->pq_id;
            $phanquyen = phanquyen::where('id',$pq_id)->first();
            $ten_pq['ten_pq'] = $phanquyen->ten_pq;
            return view('admin.users.danhsach',$ten_pq,['users'=>$users,'ten_pq'=>$ten_pq]);
        }
        else
            return view('admin.users.danhsach',['users'=>$users,'ten_pq'=>$ten_pq]);

        
    }
    public function getXemThongTin($id)
    {   
        $profileuser = profileuser::where('users_id',$id)->get();

        if(Auth::check())
        {
            $usergroup_id = Auth::user()->usergroup_id;
            $usergroup = usergroup::where('id',$usergroup_id)->first();
            $pq_id = $usergroup->pq_id;
            $phanquyen = phanquyen::where('id',$pq_id)->first();
            $ten_pq['ten_pq'] = $phanquyen->ten_pq;
            return view('admin.users.xemthongtin',$ten_pq,['profileuser'=>$profileuser]);
        }
        else
            return view('admin.users.xemthongtin',['profileuser'=>$profileuser]);
    }

    public function getloginAD(){
        return view('admin.login');
    }
    public function postloginAD(Request $Request){
        $username = $Request->username;
        $password = md5($Request->password);
        
        $this -> validate ($Request,[
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

