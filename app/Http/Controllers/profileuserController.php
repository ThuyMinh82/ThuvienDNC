<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profileuser;
use App\users;
use DB;
use App\phanquyen;
use App\usergroup;
use Illuminate\Support\Facades\Auth;
class profileuserController extends Controller
{
    //
    public function getIndex(Request $Request)
    {
        $id = Auth::user()->id;
        $profileuser = profileuser::where('users_id',$id)->get();

        if(Auth::check())
        {
            $usergroup_id = Auth::user()->usergroup_id;
            $usergroup = usergroup::where('id',$usergroup_id)->first();
            $pq_id = $usergroup->pq_id;
            $phanquyen = phanquyen::where('id',$pq_id)->first();
            $ten_pq['ten_pq'] = $phanquyen->ten_pq;
            return view('admin.profileuser.prouser',$ten_pq,['profileuser'=>$profileuser]);
        }
        else
            return view('admin.profileuser.prouser',['profileuser'=>$profileuser]);

        
    }

    public function getThaydoi($id)
    {
        $profileuser = profileuser::find($id);

        if(Auth::check())
        {
            $usergroup_id = Auth::user()->usergroup_id;
            $usergroup = usergroup::where('id',$usergroup_id)->first();
            $pq_id = $usergroup->pq_id;
            $phanquyen = phanquyen::where('id',$pq_id)->first();
            $ten_pq['ten_pq'] = $phanquyen->ten_pq;
            return view('admin.profileuser.thaydoi',$ten_pq,['profileuser'=>$profileuser]);
        }
        else
            return view('admin.profileuser.thaydoi',['profileuser'=>$profileuser]);

        
    }
    public function postThaydoi(Request $request,$id)
    {
        $profileuser = profileuser::find($id);
        /*$this->validate($Request,
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

            ]);*/
        $profileuser->name_prouser = $request->name_prouser;
        $profileuser->email = $request->email;
        $profileuser->address = $request->address;
        $profileuser->sdt = $request->sdt;
        $profileuser->users_id = $profileuser->users_id;
        $profileuser->save();
        return redirect('admin/profileuser/prouser')->with('thongbao','Bạn đã thay đổi thành công');
    }

    public function getThem()
    {
    	$id = Auth::user()->id;
        $profileuser = profileuser::where('users_id',$id);

        if(Auth::check())
        {
            $usergroup_id = Auth::user()->usergroup_id;
            $usergroup = usergroup::where('id',$usergroup_id)->first();
            $pq_id = $usergroup->pq_id;
            $phanquyen = phanquyen::where('id',$pq_id)->first();
            $ten_pq['ten_pq'] = $phanquyen->ten_pq;
            return view('admin.profileuser.them',$ten_pq,['profileuser'=>$profileuser]);
        }
        else
            return view('admin.profileuser.them',['profileuser'=>$profileuser]);

    }

    public function postThem(Request $request)
    {
        $id = Auth::user()->id;
        /*$this->validate($Request,
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

            ]);*/
        $profileuser = new profileuser;
        $profileuser->name_prouser = $request->name_prouser;
        $profileuser->email = $request->email;
        $profileuser->address = $request->address;
        $profileuser->sdt = $request->sdt;
        $profileuser->users_id = $id;
        $profileuser->save();
        return redirect('admin/profileuser/prouser')->with('thongbao','Bạn đã thêm thành công');
    }
}
