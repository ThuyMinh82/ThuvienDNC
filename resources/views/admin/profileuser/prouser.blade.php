@extends('pages.page')

@section('header')
<title>Trang chủ Admin</title>
@endsection

@section('content')
<div class="row no-gutters">
    <div class="col-md-1"></div>
    <div class="col-md-10 col-sm-12 padding-0">
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Bạn có thể thay đổi thông tin cá nhân và sử dụng hệ thống.</strong> 
        </div>
        <h4>THÔNG TIN TÀI KHOẢN</h4>       
        <table class="table table-hover s">
            <tbody>
            <tr>
                <td id='bold3' style="width: 30px;">STT</td>
                <td id='bold3'style="width: 25%;">Họ Tên</td>
                <td id='bold3'>Tên hiển thị</td>
                <td id='bold3'style="width: 20%;">Email</td>
                <td id='bold3'>Địa chỉ</td>
                <td id='bold3'>Số điện thoại</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                @foreach($profileuser as $pu)
              <tr class="odd gradeX">
                  <td>{{$pu->id}}</td>
                  <td>{{$pu->name_prouser}}</td>
                  <td></td>
                  <td>{{$pu->email}}</td>
                  <td>{{$pu->address}}</td>
                  <td>{{$pu->sdt}}</td>
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
@endsection()

