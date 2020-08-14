@extends('pages.page')

@section('header')
<title>Thêm tài khoản</title>
@endsection

@section('content')
<div class="row no-gutters">
    <div class="col-md-3"></div>
    <div class="col-md-6 col-sm-12 padding-0">
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
        <h4>THÊM TÀI KHOẢN</h4> 
        <form action="admin/users/themtaikhoan" method="POST">
            <table class="table table-hover">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <tbody>
            <tr>
                <td id='bold3'>Tên đăng nhập:</td>
                <td><input class="form-control" name="username" id="focusedInput" type="text"></td>
            </tr>
            <tr>
                <td id='bold3'>Nhập mật khẩu:</td>
                <td><input class="form-control" name="password" id="focusedInput" type="password"></td>
            </tr>
            <tr>
                <td id='bold3'>Nhập lại mật khẩu:</td>
                <td><input class="form-control" name="password" id="focusedInput" type="password"></td>
            </tr>
            <tr>
                <td id='bold3'>Nhóm Người Dùng:</td>
                <td>
                    <select class="form-control" name="usergroup" id="usergroup">
                    <option>Admin</option>
                    <option>User</option>>
                    </select>
                </td>
            </tr>
            </tbody>
            </table>
            <button type="submit" class="btn btn-primary center" style="margin-top: 30px;">Thêm</button>
        </form>
    </div>
    <div class="col-md-3"></div> 
</div>
<br>
<br>
<br>
<br>
@endsection()