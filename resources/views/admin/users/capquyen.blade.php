@extends('pages.page')

@section('header')
<title>Cấp quyền</title>
@endsection

@section('content')
<div class="row no-gutters">
    <div class="col-md-3"></div>
    <div class="col-md-6 col-sm-12 padding-0">
        <div style="padding-bottom: 120px">
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
            <div class="row no-gutters">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h1 style="text-align: center;">Cấp quyền</h1><br>
                    <form action="admin/users/capquyen/{{$users->id}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-group" style="text-align:center;">
                            <label style=''>Người dùng: {{$users->username}}</label><br><br>
                            <label style='margin-right: 10px;'>Quyền người dùng:</label>
                            <label class="radio-inline">
                            <input name="usergroup_id" value="1" 
                            @if($users->usergroup_id == 1)
                            {{"checked"}}
                            @endif
                              type="radio" >Admin 
                            </label>
                            <label class="radio-inline">
                            <input name="usergroup_id" value="2" 
                            @if($users->usergroup_id == 2)
                            {{"checked"}}
                            @endif
                             type="radio" >Thành viên
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary center" style="margin-top: 30px;">Sửa</button>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
    </div>
    <div class="col-md-3"></div> 
</div>
@endsection