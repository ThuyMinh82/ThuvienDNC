<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\baivietRequest;
use App\baiviet;
use App\chudebv;
use DB;

class baivietController extends Controller
{
    //
    public function getDanhSach()
    {
      $chudebv = chudebv::all();
      $baiviet = baiviet::orderBy('id','ASC')->get();
      return view('admin.baiviet.danhsach',['baiviet'=>$baiviet,'chudebv'=>$chudebv]);

    }

    public function getThem()
    {
        $chudebv = chudebv::all();
        return view('admin.baiviet.thembv',['chudebv'=>$chudebv]);
    }

        public function postThem(Request $request)
    {
        $this->validate($request, [
            'chudebv'=>'required',
            'ten_bv'=>'required|min:3|unique:baiviet,ten_bv',
            'mtngan_bv'=>'required',
            'noidung_bv'=>'required'
            ],[

            'chudebv.required'=>'Bạn chưa chọn chủ đề bài viết',
            'ten_bv.required'=>'Bạn chưa nhập tên bài viết',
            'ten_bv.min'=>'Tên bài viết phải có ít nhất 3 ký tự',
            'ten_bv.unique'=>'Tên bài viết đã tồn tại ',
            'mtngan_bv.required'=>'Bạn chưa viết mô tả ngắn',
            'noidung_bv.required'=>'Bạn chưa nhập nội dung bài viết'
        ]);

        $baiviet= new baiviet;
        $baiviet->ten_bv=$request->ten_bv;
        $baiviet->mtngan_bv = $request->mtngan_bv;
        $baiviet->noidung_bv = $request->noidung_bv;
        $baiviet->alias = changeTitle($request->ten_bv);
        $baiviet->cd_id = $request->chudebv;
        $baiviet->status = $request->status;
        $baiviet->user_id = $request->users;
        $baiviet->save();
        return redirect('admin/baiviet/thembv')->with('thongbao','Bạn đã thêm bài viết thành công');
    }
    public function getSua($id)
    {
        $chudebv = chudebv::all();
        $baiviet = baiviet::find($id);
        return view('admin.baiviet.suabv',['baiviet'=>$baiviet,'chudebv'=>$chudebv]);
    }
    public function postSua(Request $request,$id)
    {  
        $baiviet = baiviet::find($id);
        $this->validate($request,[
            'chudebv'=>'required',
            'ten_bv'=>'required|min:3|unique:baiviet,ten_bv',
            'mtngan_bv'=>'required',
            'noidung_bv'=>'required'
            ],[

            'chudebv.required'=>'Bạn chưa chọn chủ để bài viết',
            'ten_bv.required'=>'Bạn chưa nhập tên bài viết',
            'ten_bv.min'=>'Tên bài viết phải có ít nhất 3 ký tự',
            'ten_bv.unique'=>'Tên bài viết đã tồn tại ',
            'mtngan_bv.required'=>'Bạn chưa viết mô tả ngắn',
            'noidung_bv.required'=>'Bạn chưa nhập nội dung bài viết'
        ]);


        $baiviet->ten_bv=$request->ten_bv;
        $baiviet->mtngan_bv = $request->mtngan_bv;
        $baiviet->noidung_bv = $request->noidung_bv;
        $baiviet->alias = changeTitle($request->ten_bv);
        $baiviet->cd_id = $request->chudebv;
        $baiviet->status = $request->status;
        $baiviet->user_id = $request->users;
        $baiviet->save();
        return redirect('admin/baiviet/suabv/'.$id)->with('thongbao','Bạn đã sửa bài viết thành công');
    }

    public function getXoa($id)
    {
        $baiviet = baiviet::find($id);
        $baiviet -> delete();
        return redirect('admin/baiviet/danhsach')->with('thongbao','Xóa thành công!');
    }
}