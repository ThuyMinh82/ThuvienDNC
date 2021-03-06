@extends('pages.page')

@section('header')
<title>Trang chủ Admin</title>
@endsection

@section('content')
<div class="row no-gutters">
    <div class="col-md-1"></div>
    <div class="col-md-10 col-sm-12 padding-0">
            @if(Auth::check())
                @if($ten_pq=='admin')
                    <div class="alert alert-success alert-dismissible" style='text-align:center;'>
                        <h5>Xin chào {{ Auth::user()->username }}! bạn đã đăng nhập thành công và có thể sử dụng tất cả chức năng.</h5>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-xl-3"></div>
                        <div class="col-xl-6 col-sm-12 padding-0">
			                <img style='width:100%; height:100%' src="{{asset('backend/images/welcome.png')}}" alt="">
                        </div>
                        <div class="col-xl-3"></div>
                    </div>
                @else
                    <div class="alert alert-success alert-dismissible" style='text-align:center;'>
                        <h5>Xin chào {{ Auth::user()->username }}! bạn đã đăng nhập thành công bạn có thể thêm bài viết và thêm hình ảnh.</h5>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-xl-3"></div>
                        <div class="col-xl-6 col-sm-12 padding-0">
			                <img style='width:100%; height:100%' src="{{asset('backend/images/welcome.png')}}" alt="">
                        </div>
                    <div class="col-xl-3"></div>
                @endif
            @else
                <div class="row no-gutters">
                    <div class="col-xl-3"></div>
                    <div class="col-xl-6 col-sm-12 padding-0">
                        <h5 style='text-align: center; '>Bạn cần phải <a href="admin/login">đăng nhập</a> để thực hiện chức năng này</h5>
                        <img style='width:100%; height:100%' src="{{asset('backend/images/404.png')}}" alt="">
                    </div>
                    <div class="col-xl-3"></div>
                </div>
            @endif
        </div>
          </tr>
            </tbody>
        </table>
    <div class="col-md-1"></div> 
</div>
</div>
@endsection()

