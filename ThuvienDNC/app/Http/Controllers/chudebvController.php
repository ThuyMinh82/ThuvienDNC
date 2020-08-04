<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\chudebv;
class chudebvController extends Controller
{
    //
    public function getThem(){
    	$chudebv = chudebv::all();
    	return view('admin.chudebv.themchude',['chudebv'=>$chudebv]);
    }

    public function getSua(){
    	return view('admin.chudebv.suachude');
    }

    public function getXoa(){
    	return view('admin.chudebv.xoachude');
    }
    public function getDanhSach()
    {
        $chudebv = chudebv::all();
        return view('admin.chudebv.danhsach',['chudebv'=>$chudebv]);
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'ten_cd' => 'required|min:3|max:255'
            ],
            [
                'ten_cd.required' => 'Bạn chưa nhập tên chủ đề',
                'ten_cd.min' => 'Tên chủ đề phải có độ dài từ 3 cho đến 255 ký tự',
                'ten_cd.max' => 'Tên chủ đề phải có độ dài từ 3 cho đến 255 ký tự',
            ]);
        $chudebv = new chudebv;
        $chudebv->ten_cd = $request->ten_cd;
        $chudebv->alias = changeTitle($request->ten_cd);
        $chudebv->save();

        return redirect('admin/chudebv/themchude')->with('thongbao', 'Thêm chủ đề thành công');
    }
}
