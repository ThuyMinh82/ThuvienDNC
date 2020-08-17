<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\chudebv;
class chudebvController extends Controller
{
    //
    public function getSua($id)
    {
        $chudebv = chudebv::find($id);
        return view('admin.chudebv.suachude',['chudebv'=>$chudebv]);
    }

    public function postSua(Request $request,$id)
    {
        $chudebv = chudebv::find($id);
        $this->validate($request,
            [
                'ten_cd' => 'required|min:3|max:255',
                'alias' => 'required|unique:chudebv,alias'
            ],
            [
                'ten_cd.required' => 'Bạn chưa nhập tên chủ đề',
                'ten_cd.min' => 'Tên chủ đề phải có độ dài từ 3 cho đến 255 ký tự',
                'ten_cd.max' => 'Tên chủ đề phải có độ dài từ 3 cho đến 255 ký tự',
                'alias.unique' => 'alias đã tồn tại',
                'alias.required' => 'Bạn chưa nhập alias tên chủ đề'
            ]);
        //$chudebv = new chudebv;
        $chudebv->ten_cd = $request->ten_cd;
        $chudebv->alias = changeTitle($request->alias);
        $chudebv->save();
        return redirect('admin/chudebv/danhsach')->with('thongbao','Sửa thành công');
    }
    public function getXoa($id){
        $chudebv = chudebv::find($id);
        $chudebv->delete();

        return redirect('admin/chudebv/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }
    public function getThem(){
    	$chudebv = chudebv::all();
    	return view('admin.chudebv.themchude',['chudebv'=>$chudebv]);
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'ten_cd' => 'required|min:3|max:255|unique:chudebv,ten_cd'
            ],
            [
                'ten_cd.required' => 'Bạn chưa nhập tên chủ đề',
                'ten_cd.unique' => 'Tên chủ đề đã tồn tại',
                'ten_cd.min' => 'Tên chủ đề phải có độ dài từ 3 cho đến 255 ký tự',
                'ten_cd.max' => 'Tên chủ đề phải có độ dài từ 3 cho đến 255 ký tự',
            ]);
        $chudebv = new chudebv;
        $chudebv->ten_cd = $request->ten_cd;
        $chudebv->alias = changeTitle($request->ten_cd);
        $chudebv->save();

        return redirect('admin/chudebv/danhsach')->with('thongbao', 'Thêm chủ đề thành công');
    }
    
    public function getDanhSach()
    {
        $chudebv = chudebv::orderBy('id','DESC')->paginate(5);
        return view('admin.chudebv.danhsach',['chudebv'=>$chudebv]);
    }


}
