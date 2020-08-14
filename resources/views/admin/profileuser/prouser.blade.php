@extends('pages.page')

@section('header')
<title>Thông tin cá nhân</title>
@endsection

@section('content')
<div class="row no-gutters">
    <div class="col-md-3"></div>
    <div class="col-md-6 col-sm-12 padding-0">
        <h4 style="text-align: center;">Thông tin cá nhân</h4>       
        <table class="table table-hover s">
          <tbody>
            @foreach($profileuser as $pu)
              <tr>
                <td id='bold3'style="width: 25%;">Họ Tên</td>
                <td>{{$pu->name_prouser}}</td>
              </tr>
              <tr>
                <td id='bold3'style="width: 20%;">Email</td>
                <td>{{$pu->email}}</td>
              </tr>
              <tr>
                <td id='bold3'>Địa chỉ</td>
                <td>{{$pu->address}}</td>
              </tr>
              <tr>
                <td id='bold3'>Số điện thoại</td>
                <td>{{$pu->sdt}}</td>
              </tr>               
            @endforeach
          </tbody>
        </table>
        <button type="button" class="btn btn-primary center"><a href="admin/profileuser/thaydoi" id="a-none">Sửa</a></button>
    </div>
    <div class="col-md-3"></div> 
</div>
@endsection()



