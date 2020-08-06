@extends('admin.layout.page')

@section('header')
<title>Thay đổi mật khẩu</title>
@endsection

@section('content')
<div class="row no-gutters">
    <div class="col-md-3"></div>
    <div class="col-md-6 col-sm-12 padding-0">
        <h4>THAY ĐỔI MẬT KHẨU</h4>       
        <table class="table table-hover">
            <tbody>
            <tr>
                <td id='bold3'>Nhập mật khẩu hiện tại:</td>
                <td><input class="form-control" id="focusedInput" type="password"></td>
            </tr>
            <tr>
                <td id='bold3'>Nhập mật khẩu mới:</td>
                <td><input class="form-control" id="focusedInput" type="password"></td>
            </tr>
            <tr>
                <td id='bold3'>Nhập lại mật khẩu mới:</td>
                <td><input class="form-control" id="focusedInput" type="password"></td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-3"></div> 
</div>
<button type="button" class="btn btn-primary center">Thay đổi</button>
@endsection()