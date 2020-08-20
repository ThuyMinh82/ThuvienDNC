@extends('pages.page')

@section('header')
<title>Thông tin cá nhân</title>
@endsection

@section('content')
<div class="row no-gutters">
  <div class="col-md-3"></div>
  <div class="col-md-6 col-sm-12 padding-0">
    <h4>Thông tin cá nhân</h4>
      <a href="admin/users/danhsach" class="btn btn-link btn-sm" style="margin-bottom: 10px;" >
        <img id='img-title' src="{{asset('backend/images/back-icon.png')}}"  style="width: 18px; margin-top: -3px; margin-right: 5px;">Quay lại
      </a> 
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
    @if($profileuser->isEmpty())
      <h5 style='text-align:center;'>Người dùng này chưa có thông tin</h5>
    @endif
  </div>
  <div class="col-md-3"></div> 
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection()