@extends('pages.page')

@section('header')
<title>Danh Sách Bài Viết Chưa Duyệt</title>
@endsection

@section('content')
<!-- Page content -->
<div class="row no-gutters">
    <div class="col-md-1"></div>
    <div class="col-md-10 col-sm-12 padding-0">
        <table style="width: 100%">
          <tbody>
              <tr>
                <th ><h3 style="text-align: center;">Danh Sách Bài Viết Chưa Duyệt</h3></th>
                <th style="width: 250px;">
                  <form action="admin/baiviet/danhsachchuaduyet/search" method="GET">
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
        <table class="table table-hover">                
            <thead>
              <th>ID</th>
              <th>Tên Bài Viết</th>
              <th style="width: 150px;">Tên chủ Đề </th>
              <th style="width: 150px;">Ngày Đăng</th>
              <th>Ảnh Đại Diện</th>
              <th style="text-align: center;">Xử Lý</th>
            </thead>
          <tbody>
            @foreach($baiviet as $bv)
            <tr class="odd gradeX">
              <td>{{$bv->id}}</td>
              <td><a href="admin/baiviet/xembaiviet/{{$bv->id}}">{{$bv->ten_bv}}</a></td>
              <td>{{$bv->chudebv->ten_cd}}</td>
              <td>{{$bv->created_at}}</td>
              <td><a href="{{$bv->anhdaidien}}"> <img style='width:80px; height:60px' src="{{$bv->anhdaidien}}"></a></td>                
              <td style=' width: 171px;'>
                @if(Auth::check())
                @if($ten_pq=='admin')
                <a href="admin/baiviet/duyetbv/{{$bv->id}}"><i class='fas fa-check'style='margin: 5px;color:black'></i>Duyệt</a>
                @else
                <a href="admin/baiviet/suabv/{{$bv->id}}"><i class='fas fa-pen-alt'style='margin: 5px;color:black'></i>Sửa</a>
                @endif
                @endif
                <button class="btn btn-link" type='button' data-toggle="modal" data-target="#myModal{{$bv->id}}"><i class='fas fa-trash'style='margin: 5px;color: red'></i>Xóa</button>
              </td>
            </tr>
            <!-- The Modal -->
            <div class="modal fade" id="myModal{{$bv->id}}">
              <div class="modal-dialog">
                <div class="modal-content">
                  <!-- Modal body -->
                  <div class="modal-body">
                    Bạn có thật sự muốn xóa bài viết này?
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <a href="admin/baiviet/xoabv/{{$bv->id}}" class="btn btn-danger"><i class='fas fa-trash'style='margin: 5px;color: white'></i>Xóa</a>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </tbody>
        </table>
          <nav aria-label="Page navigation example" style='float: right;'>
              {{ $baiviet->links() }}
          </nav>
    </div>
    <div class="col-md-1"></div>
</div>

@endsection