@extends('pages.page')

@section('header')
<title>Thêm tài khoản</title>
@endsection

@section('content')
<!-- Page content -->
<div class="row no-gutters">
    <div class="col-md-2"></div>
    <div class="col-md-8 col-sm-12 padding-0">
        <h1 class="page-header" style="text-align: center;">Danh sách tài khoản</h1>
            <!--/.col-lg-12-->
                @if(session('thongbao'))
                    <div class="alert alert-success">
                          {{session('thongbao')}}
                    </div>
                @endif
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Username</th>
                        <th>Phân Quyền</th>
                        <th>Group</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $us)
                    <tr class="odd gradeX" align="center">
                        <td>{{$us->id}}</td>
                        <td><a href="admin/baiviet/xemthongtin/{{$us->id}}">{{$us->username}}</td>
                        <td>
                            {{$us->usergroup->phanquyen->ten_pq}}
                        </td>
                        <td>
                            {{$us->usergroup->name_group}}
                        </td>
                        <td style=' width: 150px;'>
                          <a href="admin/users/doimatkhau/{{$us->id}}"><i class='fas fa-pen-alt'style='margin: 5px;color:black'></i>Sửa</a>
                          <a href="admin/users/xoataikhoan/{{$us->id}}"><i class='fas fa-trash'style='margin: 5px;color: red'></i>Xóa</a>
                        </td>                        
                    </tr>
                    @endforeach
                </tbody>
        </table>
        <nav aria-label="Page navigation example" style='float: right;'>
            {{ $users->links() }}
        </nav>
    </div>
    <div class="col-md-2"></div> 
</div>
@endsection
