@extends('pages.page')

@section('header')
<title>Thông tin cá nhân</title>
@endsection

@section('content')
<div class="row no-gutters">
  <div class="col-md-3"></div>
  <div class="col-md-6 col-sm-12 padding-0">
  @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
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
    @if($profileuser->isEmpty())
      <h5 style='text-align:center;'>Bạn chưa có thông tin. <a href="admin/profileuser/them">Nhập thông tin của bạn</a></h5>
    @else
      @foreach($profileuser as $pro)
      <a href="admin/profileuser/thaydoi/{{$pro->id}}" class="btn btn-primary center">Thay đổi</a>
      @endforeach
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
