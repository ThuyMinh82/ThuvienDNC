<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profileuser;
use App\users;
use DB;
use Illuminate\Support\Facades\Auth;
class profileuserController extends Controller
{
    //
    public function getIndex(Request $Request)
    {
        $id = Auth::user()->id;
        $profileuser = DB::table('profileuser')->where('users_id',$id)->get();
        return view('admin.profileuser.prouser',['profileuser'=>$profileuser]);
    }

    public function getThaydoi($id)
    {
    	$users = users::all();
        $profileuser = profileuser::find($id);
        return view('admin.profileuser.thaydoi',['profileuser'=>$profileuser,'users'=>$users]);
    }
    public function postThaydoi(Request $Request,$id)
    {
        $profileuser = profileuser::find($id);

        $this->validate($Request,
            [
                'name_prouser' => 'required|unique:name_prouser|min:5|max:255',
                'email'=>'required',
                'address'=>'required',
                'sdt'=>'required',
            ],
            [
                'name_prouser.required' => 'Bạn chưa nhập tên của bạn',
                'email.unique' => 'Email đã tồn tại',
                'address.required' => 'Bạn chưa nhập địa chỉ',
                'sdt.min' => 'Số điện thoại phải có 10 ký tự',
                'sdt.max' => 'Số điện thoại phải đủ 10 ký tự',

            ]);
        $profileuser= new profileuser;
        $profileuser->name_prouser=$request->name_prouser;
        $profileuser->email = $request->email;
        $profileuser->address = $request->address;
        $profileuser->sdt = $request->sdt;
        $profileuser->save();
        return redirect('admin/profileuser/thaydoi/'.$id)->with('thongbao','Bạn đã thay đổi thành công');
    }
}
