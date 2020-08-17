<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\hinhanh;
class hinhanhController extends Controller
{
    //
    public function getThem(){
    	$hinhanh = hinhanh::all();
    	return view('admin.hinhanh.themhinhanh',['hinhanh'=>$hinhanh]);
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'ten_anh' => 'required|min:3|max:255|unique:hinhanh,ten_anh',
            ],
            [
                'ten_anh.required' => 'Bạn chưa nhập tên hình ảnh',
                'ten_anh.unique' => 'Tên ảnh đã tồn tại',
                'ten_anh.min' => 'Tên ảnh phải có độ dài từ 3 cho đến 255 ký tự',
                'ten_anh.max' => 'Tên ảnh phải có độ dài từ 3 cho đến 255 ký tự',
            ]);
        $hinhanh = new hinhanh;
        $hinhanh->ten_anh = $request->ten_anh;
        $hinhanh->link_anh = $request->link_anh;
        $hinhanh->save();

        return redirect('admin/hinhanh/themhinhanh')->with('thongbao', 'Thêm hình ảnh thành công');
    }

    public function getDanhSach()
    {
        $hinhanh = hinhanh::orderBy('id','DESC')->paginate(5);
        return view('admin.hinhanh.danhsach',['hinhanh'=>$hinhanh]);
    }

    public function getXoa($id){
        $hinhanh = hinhanh::find($id);
        $hinhanh->delete();
        return redirect('admin/hinhanh/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }

    public function getSua($id)
    {
        $hinhanh = hinhanh::find($id);
        return view('admin.hinhanh.suahinhanh',['hinhanh'=>$hinhanh]);
    }

    public function postSua(Request $request,$id)
    {
        $hinhanh = hinhanh::find($id);
        $this->validate($request,
        [
            'ten_anh' => 'required|min:3|max:255|unique:hinhanh,ten_anh',
        ],
        [
            'ten_anh.required' => 'Bạn chưa nhập tên hình ảnh',
            'ten_anh.unique' => 'Tên ảnh đã tồn tại',
            'ten_anh.min' => 'Tên ảnh phải có độ dài từ 3 cho đến 255 ký tự',
            'ten_anh.max' => 'Tên ảnh phải có độ dài từ 3 cho đến 255 ký tự',
        ]);
        //$chudebv = new chudebv;
        $hinhanh->ten_anh = $request->ten_anh;
        $hinhanh->link_anh = $request->link_anh;
        $hinhanh->save();
        return redirect('admin/hinhanh/suahinhanh/'.$id)->with('thongbao','Sửa thành công');
    }
}
