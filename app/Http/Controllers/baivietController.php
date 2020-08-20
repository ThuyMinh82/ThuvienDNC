<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\baivietRequest;
use App\baiviet;
use App\chudebv;
use DB;
use App\phanquyen;
use App\usergroup;
use Illuminate\Support\Facades\Auth;

class baivietController extends Controller
{
    //
    public function getDanhSach()
    {
        $chudebv = chudebv::all();
        $baiviet = baiviet::where('status','1')->orderBy('id','DESC')->paginate(5);
        
        #lay tên phân quyền
        if(Auth::check())
        {
            $usergroup_id = Auth::user()->usergroup_id;
            $usergroup = usergroup::where('id',$usergroup_id)->first();
            $pq_id = $usergroup->pq_id;
            $phanquyen = phanquyen::where('id',$pq_id)->first();
            $ten_pq['ten_pq'] = $phanquyen->ten_pq;

            return view('admin.baiviet.danhsach',$ten_pq,['baiviet'=>$baiviet,'chudebv'=>$chudebv]);
        }
        else
            return view('admin.baiviet.danhsach',['baiviet'=>$baiviet,'chudebv'=>$chudebv]);
    }

    public function getDSBVSearch(Request $request){
        $chudebv = chudebv::all();
        $search = $request->get('search');
        $baiviet = baiviet::where('status','1')->where('ten_bv', 'like', '%'.$search.'%')->orderBy('id','DESC')->paginate(5);
        
        #lay tên phân quyền
        if(Auth::check())
        {
            $usergroup_id = Auth::user()->usergroup_id;
            $usergroup = usergroup::where('id',$usergroup_id)->first();
            $pq_id = $usergroup->pq_id;
            $phanquyen = phanquyen::where('id',$pq_id)->first();
            $ten_pq['ten_pq'] = $phanquyen->ten_pq;

            return view('admin.baiviet.danhsach',$ten_pq,['baiviet'=>$baiviet,'chudebv'=>$chudebv]);
        }
        else
            return view('admin.baiviet.danhsach',['baiviet'=>$baiviet,'chudebv'=>$chudebv]);
    }
    public function getThem()
    {
        $chudebv = chudebv::all();

        #lay tên phân quyền
        if(Auth::check())
        {
            $usergroup_id = Auth::user()->usergroup_id;
            $usergroup = usergroup::where('id',$usergroup_id)->first();
            $pq_id = $usergroup->pq_id;
            $phanquyen = phanquyen::where('id',$pq_id)->first();
            $ten_pq['ten_pq'] = $phanquyen->ten_pq;

            return view('admin.baiviet.thembv',$ten_pq,['chudebv'=>$chudebv]);
        }
        else
            return view('admin.baiviet.thembv',['chudebv'=>$chudebv]);
    }

        public function postThem(Request $request)
    {
        $this->validate($request, [
            'chudebv'=>'required',
            'ten_bv'=>'required|min:3|unique:baiviet,ten_bv',
            'anhdaidien'=>'required|unique:baiviet,anhdaidien',
            'mtngan_bv'=>'required',
            'noidung_bv'=>'required'
            ],[

            'chudebv.required'=>'Bạn chưa chọn chủ đề bài viết',
            'ten_bv.required'=>'Bạn chưa nhập tên bài viết',
            'anhdaidien.required'=>'Bạn chưa chọn ảnh đại diện',
            'anhdaidien.unique'=>'Ảnh đại diện đã tồn tại',
            'ten_bv.min'=>'Tên bài viết phải có ít nhất 3 ký tự',
            'ten_bv.unique'=>'Tên bài viết đã tồn tại ',
            'mtngan_bv.required'=>'Bạn chưa viết mô tả ngắn',
            'noidung_bv.required'=>'Bạn chưa nhập nội dung bài viết'
        ]);

        $baiviet= new baiviet;
        $baiviet->ten_bv=$request->ten_bv;
        $baiviet->anhdaidien=$request->anhdaidien;
        $baiviet->mtngan_bv = $request->mtngan_bv;
        $baiviet->noidung_bv = $request->noidung_bv;
        $baiviet->alias = changeTitle($request->ten_bv);
        $baiviet->cd_id = $request->chudebv;
        $baiviet->status = 0;
        $baiviet->user_id = Auth::user()->id;
        $baiviet->save();
        return redirect('admin/baiviet/danhsachchuaduyet')->with('thongbao','Bạn đã thêm bài viết thành công');
    }
    public function getSua($id)
    {
        $chudebv = chudebv::all();
        $baiviet = baiviet::find($id);

        #lay tên phân quyền
        if(Auth::check())
        {
            $usergroup_id = Auth::user()->usergroup_id;
            $usergroup = usergroup::where('id',$usergroup_id)->first();
            $pq_id = $usergroup->pq_id;
            $phanquyen = phanquyen::where('id',$pq_id)->first();
            $ten_pq['ten_pq'] = $phanquyen->ten_pq;
            return view('admin.baiviet.suabv',$ten_pq,['baiviet'=>$baiviet,'chudebv'=>$chudebv]);
        }
        else
            return view('admin.baiviet.suabv',['baiviet'=>$baiviet,'chudebv'=>$chudebv]);
    }
    public function postSua(Request $request,$id)
    {  
        $baiviet = baiviet::find($id);
        $this->validate($request,[
            'chudebv'=>'required',
            'ten_bv'=>'required|min:3|unique:baiviet,ten_bv',
            'anhdaidien'=>'required|',
            'mtngan_bv'=>'required',
            'noidung_bv'=>'required',
            'alias' => 'required'
            ],[

            'chudebv.required'=>'Bạn chưa chọn chủ đề bài viết',
            'ten_bv.required'=>'Bạn chưa nhập tên bài viết',
            'ten_bv.min'=>'Tên bài viết phải có ít nhất 3 ký tự',
            'ten_bv.unique'=>'Tên bài viết đã tồn tại ',
            'mtngan_bv.required'=>'Bạn chưa viết mô tả ngắn',
            'noidung_bv.required'=>'Bạn chưa nhập nội dung bài viết',
            'alias.required' => 'Bạn chưa nhập alias'
        ]);


        $baiviet->ten_bv=$request->ten_bv;
        $baiviet->mtngan_bv = $request->mtngan_bv;
        $baiviet->noidung_bv = $request->noidung_bv;
        $baiviet->alias = changeTitle($request->alias);
        $baiviet->cd_id = $request->chudebv;
        $baiviet->user_id = $request->users;
        $baiviet->save();
        return redirect('admin/baiviet/danhsach')->with('thongbao','Bạn đã sửa bài viết thành công');
    }

    public function getXoa($id)
    {
        $baiviet = baiviet::find($id);
        $baiviet -> delete();
        return redirect('admin/baiviet/danhsach')->with('thongbao','Xóa thành công!');
    }
    public function getDanhSachChuaDuyet()
    {
        $chudebv = chudebv::all();
        $baiviet = baiviet::where('status','0')->orderBy('id','DESC')->paginate(5);

        #lay tên phân quyền
        if(Auth::check()){
            $usergroup_id = Auth::user()->usergroup_id;
            $usergroup = usergroup::where('id',$usergroup_id)->first();
            $pq_id = $usergroup->pq_id;
            $phanquyen = phanquyen::where('id',$pq_id)->first();
            $ten_pq['ten_pq'] = $phanquyen->ten_pq;

            return view('admin.baiviet.danhsachchuaduyet',$ten_pq,['baiviet'=>$baiviet,'chudebv'=>$chudebv]);
        }
        else
            return view('admin.baiviet.danhsachchuaduyet',['baiviet'=>$baiviet,'chudebv'=>$chudebv]);
    }
    
    public function getDSBVCDSearch(Request $request){
        $chudebv = chudebv::all();
        $search = $request->get('search');
        $baiviet = baiviet::where('status','0')->where('ten_bv', 'like', '%'.$search.'%')->orderBy('id','DESC')->paginate(5);
        
        #lay tên phân quyền
        if(Auth::check())
        {
            $usergroup_id = Auth::user()->usergroup_id;
            $usergroup = usergroup::where('id',$usergroup_id)->first();
            $pq_id = $usergroup->pq_id;
            $phanquyen = phanquyen::where('id',$pq_id)->first();
            $ten_pq['ten_pq'] = $phanquyen->ten_pq;

            return view('admin.baiviet.danhsachchuaduyet',$ten_pq,['baiviet'=>$baiviet,'chudebv'=>$chudebv]);
        }
        else
            return view('admin.baiviet.danhsachchuaduyet',['baiviet'=>$baiviet,'chudebv'=>$chudebv]);
    }
    

    public function getDuyet($id)
    {
        $baiviet = baiviet::find($id);
        $baiviet->status = 1;
        $baiviet->save();
        return redirect('admin/baiviet/danhsach')->with('thongbao','Duyệt thành công!');
    }

    public function getXemBV($id)
    {
        $chudebv = chudebv::all();
        $baiviet = baiviet::find($id);

        #lay tên phân quyền
        if(Auth::check()){
            $usergroup_id = Auth::user()->usergroup_id;
            $usergroup = usergroup::where('id',$usergroup_id)->first();
            $pq_id = $usergroup->pq_id;
            $phanquyen = phanquyen::where('id',$pq_id)->first();
            $ten_pq['ten_pq'] = $phanquyen->ten_pq;

            return view('admin.baiviet.xembaiviet',$ten_pq,['baiviet'=>$baiviet,'chudebv'=>$chudebv]);
        }
        else
            return view('admin.baiviet.xembaiviet',['baiviet'=>$baiviet,'chudebv'=>$chudebv]);
    }
}