@extends('pages.page')

@section('header')
<title>Danh sách tài khoản</title>
@endsection

@section('content')
<!-- Page content -->
@if(Auth::check())
@if($ten_pq=='admin')
<div class="row no-gutters">
    <div class="col-md-2"></div>
    <div class="col-md-8 col-sm-12 padding-0">
        <table style="width: 100%">
          <tbody>
              <tr>
                <th ><h3 style="text-align: center;">Danh sách tài khoản</h3></th>
                <th style="width: 250px;">
                  <form action="admin/users/danhsach/search" method="GET">
                    <div class="input-group">
                      <input type="text" name="search" id='search' class="form-control" placeholder="Search">
                      <button type="submit" class="btn btn-link"><i class='fas fa-search'style='margin: 5px; color: black;'></i></button>
                    </div>  
                  </form>
                </th>
              </tr>
          </tbody>
        </table>
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
                        <th style='width:30%;'>Tùy chọn</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $us)
                    <tr class="odd gradeX" align="center">
                        <td>{{$us->id}}</td>
                        <td><a href="admin/users/xemthongtin/{{$us->id}}">{{$us->username}}</td>
                        <td>
                            {{$us->usergroup->phanquyen->ten_pq}}
                        </td>
                        <td>
                            {{$us->usergroup->name_group}}
                        </td>
                        <td style=' width: 150px;'>
                          <a href="admin/users/capquyen/{{$us->id}}"><i class='fas fa-pen-alt'style='margin: 5px;color:black'></i>Sửa Quyền</a>
                          <button class="btn btn-link" type='button' data-toggle="modal" data-target="#myModal{{$us->id}}"><i class='fas fa-trash'style='margin: 5px;color: red'></i>Xóa</button>
                        </td>                        
                    </tr>
                    <!-- The Modal -->
                    <div class="modal fade" id="myModal{{$us->id}}">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- Modal body -->
                            <div class="modal-body">
                            Bạn có thật sự muốn xóa tài khoản này?
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="admin/users/xoataikhoan/{{$us->id}}" class="btn btn-danger"><i class='fas fa-trash'style='margin: 5px;color: white'></i>Xóa</a>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
        </table>
        <nav aria-label="Page navigation example" style='float: right;'>
            {{ $users->links() }}
        </nav>
    </div>
    <div class="col-md-2"></div> 
</div>
@else
<div class="row no-gutters">
    <div class="col-xl-3"></div>
    <div class="col-xl-6 col-sm-12 padding-0">
        <h5 style='text-align: center; '>Bạn phải là admin để thực hiện chức năng này</h5>
        <img style='width:100%; height:100%' src="{{asset('backend/images/404.png')}}" alt="">
    </div>
    <div class="col-xl-3"></div>
</div>
@endif
@endif
@endsection
