@extends('pages.page')

@section('header')
<title>Đổi mật khẩu</title>
@endsection

@section('content')
<div class="row no-gutters">
    <div class="col-md-1"></div>
    <div class="col-md-10 col-sm-12 padding-0">
            <!--/.col-lg-12-->
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
                    <h1 style="text-align: center;">Đổi mật khẩu</h1>
                    <form action="admin/users/doimatkhau/{{$users->id}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <!-- <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" name="username" placeholder="Nhập username" value = "{{$users->username}}" readonly="" />
                        </div> -->
                        <div class="form-group">
                            <!-- <input type="checkbox" id="changePassword" name="changePassword"> -->
                            <label>Đổi mật khẩu</label>
                            <input type="password" class="form-control password" name="password" placeholder="Nhập mật khẩu mới" />
                        </div>
                        <div class="form-group">
                            <label>Nhập lại mật khẩu</label>
                            <input type="password" class="form-control password" name="passwordAgain" placeholder="Nhập lại mật khẩu"/>
                        </div>
                        <!-- <div class="form-group" >
                            <label>Quyền người dùng</label>
                            <input class="form-control" name="usergroup_id" placeholder="Nhập username" value = "{{$users->usergroup->name_group}}" readonly="" />
                            <form action="admin/users/doimatkhau" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}} "/>
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

                        </div> -->
                        <button type="submit" class="btn btn-primary center" style="margin-top: 30px;">Sửa</button>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
    </div>
    <div class="col-md-1"></div>
</div>
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $("#changePassword").change(function(){
                if($(this).is(":checked"))
                {
                    $(".password").removeAttr('disabled');
            
                }
                else
                {
                    $(".password").attr('disabled', '');

                }

            });
        });
    </script>
@endsection