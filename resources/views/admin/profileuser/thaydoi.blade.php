@extends('pages.page')

@section('header')
<title>Sửa thông tin cá nhân</title>
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
        <h4 style="text-align: center;">Sửa thông tin cá nhân</h4>
        <form action="admin/profileuser/thaydoi" method="POST">  
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>     
        <table class="table table-hover s">
          <tbody>
            @foreach($profileuser as $pu)
              <tr>
                <td id='bold3' style="width: 30px;">STT</td>
                <td><input class="form-control" id="focusedInput" type="text" value="{{$pu->id}}"></td>
              </tr>
              <tr>
                <td id='bold3'style="width: 25%;">Họ Tên</td>
                <td><input class="form-control" id="focusedInput" type="text" value="{{$pu->name_prouser}}"></td>
              </tr>
              <tr>
                <td id='bold3'>Tên hiển thị</td>
                <td>{{$pu->users->username}}></td>
              </tr>
              <tr>
                <td id='bold3'style="width: 20%;">Email</td>
                <td><input class="form-control" id="focusedInput" type="text" value="{{$pu->email}}"></td>
              </tr>
              <tr>
                <td id='bold3'>Địa chỉ</td>
                <td><input class="form-control" id="focusedInput" type="text" value="{{$pu->address}}"></td>
              </tr>
              <tr>
                <td id='bold3'>Số điện thoại</td>
                <td><input class="form-control" id="focusedInput" type="text" value="{{$pu->sdt}}"></td>
              </tr>               
            @endforeach
          </tbody>
        </table>
        <button type="submit" class="btn btn-primary center">Lưu</button>
      </form>
    </div>
    <div class="col-md-3"></div> 
</div>
@endsection()



