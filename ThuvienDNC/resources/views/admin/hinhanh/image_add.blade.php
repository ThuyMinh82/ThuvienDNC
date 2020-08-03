@extends('admin.layout.page')

@section('header')
<title>Thêm hình ảnh</title>
@endsection

@section('content')
<div class="row no-gutters">
    <div class="col-md-3"></div>
    <div class="col-md-6 col-sm-12 padding-0">
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Đăng nhập thành công!</strong> Bạn có thể thay đổi thông tin cá nhân và sử dụng hệ thống.
        </div>
        <h4>THÔNG TIN TÀI KHOẢN</h4>       
        <table class="table table-hover">
            <tbody>
            <tr>
                <td id='bold'>Họ Tên:</td>
                <td>Nguyễn Hoàng Giang</td>
            </tr>
            <tr>
                <td id='bold'>Email:</td>
                <td>admin@example.com</td>
            </tr>
            <tr>
                <td id='bold'>Địa chỉ:</td>
                <td>2338/4, ấp Mỹ Hưng 1, xã Mỹ Hòa, thị xã Bình Minh, tỉnh Vĩnh Long</td>
            </tr>
            <tr>
                <td id='bold'>Số điện thoại:</td>
                <td>0789539650</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-3"></div> 
</div>
<button type="button" class="btn btn-primary center"><a href="changepro.html" id="a-none">Thay đổi</a></button>
<br>
<br>
<br>
<br>
@endsection()