@extends('admin.layout.page')

@section('header')
<title>Trang chủ Admin</title>
@endsection

@section('content')
<div class="row no-gutters">
    <div class="col-md-1"></div>
    <div class="col-md-10 col-sm-12 padding-0">
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Đăng nhập thành công!</strong> Bạn có thể thay đổi thông tin cá nhân và sử dụng hệ thống.
        </div>
        <h4>THÔNG TIN TÀI KHOẢN</h4>       
        <table class="table table-hover s">
            <tbody>
            <tr>
                <td id='bold3' style="width: 30px;">STT</td>
                <td id='bold3'style="width: 25%;">Họ Tên</td>
                <td id='bold3'>Tên hiển thị</td>
                <td id='bold3'style="width: 20%;">Status</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                @foreach($users as $pu)
              <tr class="odd gradeX">
                  <td>{{$pu->id}}</td>
                  <td>{{$pu->prouser->name_prouser}}</td>
                  <td>{{$pu->username}}</td>
                  <td>{{$pu->status}}</td>
                  <td class="center"><i class="fas fa-pen-alt"></i>Sửa
                  </td>
                  <td class="center"><i class="fas fa-trash" data-toggle="modal" data-target="#myModal"></i>Xóa</td>
              </tr>
              @endforeach
          </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-1"></div> 
</div>
<button type="button" class="btn btn-primary center"><a href="changepro.html" id="a-none">Thay đổi</a></button>
@endsection()

        