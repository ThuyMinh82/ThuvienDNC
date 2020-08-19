@extends('pages.page')

@section('header')
<title>Thông tin cá nhân</title>
@endsection

@section('content')
<div class="row no-gutters">
  <div class="col-md-3"></div>
  <div class="col-md-6 col-sm-12 padding-0">
    <h4>Thông tin cá nhân</h4> 
    @foreach($profileuser as $pro)
    <table class="table table-hover">
      <tbody>
        <tr>
          <th style="width: 35%">Họ Tên:</th>
          <td>{{$pro->name_prouser}}</td>
        </tr>
        <tr>
          <th>Email:</th>
          <td>{{$pro->email}}</td>
        </tr>
        <tr>
          <th>Địa chỉ:</th>
           <td>{{$pro->address}}</td>
        </tr>
        <tr>
          <th>SĐT:</th>
          <td>{{$pro->sdt}}</td>
        </tr>
      </tbody>                   
    </table>
    @endforeach
    <a href="admin/profileuser/thaydoi" class="btn btn-primary center">Thay đổi</a>
  </div>
  <div class="col-md-3"></div> 
</div>
@endsection()