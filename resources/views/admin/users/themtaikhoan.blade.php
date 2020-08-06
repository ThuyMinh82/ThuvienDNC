@extends('pages.page')

@section('header')
<title>Thêm tài khoản</title>
@endsection

@section('content')
<div class="row no-gutters">
    <div class="col-md-3"></div>
    <div class="col-md-6 col-sm-12 padding-0">
        <h4>THÊM TÀI KHOẢN</h4>       
        <table class="table table-hover">
            <tbody>
            <tr>
                <td id='bold3'>Tên đăng nhập:</td>
                <td><input class="form-control" id="focusedInput" type="text"></td>
            </tr>
            <tr>
                <td id='bold3'>Nhập mật khẩu:</td>
                <td><input class="form-control" id="focusedInput" type="password"></td>
            </tr>
            <tr>
                <td id='bold3'>Nhập lại mật khẩu:</td>
                <td><input class="form-control" id="focusedInput" type="password"></td>
            </tr>
            <tr>
                <td id='bold3'>Nhóm Người Dùng:</td>
                <td>
                    <select class="form-control" id="usergroup">
                    <option>Admin</option>
                    <option>User</option>>
                    </select>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-3"></div> 
</div>
<button type="button" class="btn btn-primary center">Thêm</button>
<br>
<br>
<br>
<br>
@endsection()