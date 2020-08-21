@extends('pages.page')

@section('header')
<title>Danh sách tài khoản</title>
@endsection

@section('content')
@if(Auth::check())
@if($ten_pq=='admin')
<div class="row no-gutters">
    <div class="col-md-1"></div>
    <div class="col-md-10 col-sm-12 padding-0">
            <!--/.col-lg-12-->
        <div style="padding-bottom: 120px">
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach
                </div>
            @endif

            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
            <div class="row no-gutters">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h1>Thêm tài khoản</h1>
                    <form action="admin/users/themtaikhoan" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-group">
                            <label>Nhập username</label>
                            <input class="form-control" name="username" placeholder="Nhập username của bạn" />
                        </div>
                        <div class="form-group">
                            <label>Nhập mật khẩu</label>
                            <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu" />
                        </div>
                        <div class="form-group">
                            <label>Nhập lại mật khẩu</label>
                            <input type="password" class="form-control" name="passwordAgain" placeholder="Nhập lại mật khẩu" />
                        </div>
                        <div class="form-group">
                            <label>Quyền người dùng</label>
                            <form action="admin/users/themtaikhoan" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <label class="radio-inline">
                            <input name="usergroup_id" value="1" checked= ""  type="radio" >Admin
                        </label>
                            <label class="radio-inline">
                            <input name="usergroup_id" value="2" checked= ""  type="radio" >Thành viên
                        </label>

                        </div>
                        <button type="submit" class="btn btn-primary center" style="margin-top: 30px;">Thêm</button>
                    </form>
                </div>
            <div class="col-md-4"></div>
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>
@else
<div class="row no-gutters">
    <div class="col-xl-3"></div>
    <div class="col-xl-6 col-sm-12 padding-0">
        <h5 style='text-align: center; '>Bạn phải là admin để thực hiện chức năng này</h5>
        <img style='width:100%; height:100%' src="{{asset('backend/images/404.png')}}" alt="">
    </div>
    <div class="col-xl-3"></div>
</div>
@endif
@endif
<br>
@endsection