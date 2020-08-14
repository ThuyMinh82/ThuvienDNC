<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profileuser;
use App\users;
use DB;
class profileuserController extends Controller
{
    //
    public function getIndex()
    {
    	$users = users::all();
        $profileuser= profileuser::all();
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
                //'username'=>'required',
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
        //$chudebv = new chudebv;
        $chudebv->ten_cd = $Request->ten_cd;
        $chudebv->alias = changeTitle($Request->ten_cd);
        $chudebv->save();
        return redirect('admin/chudebv/suachude/'.$id)->with('thongbao','Sửa thành công');
    }
}
