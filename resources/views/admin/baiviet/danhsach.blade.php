@extends('pages.page')

@section('header')
<title>Danh sách bài viết</title>
@endsection

@section('content')
<!-- Page content -->
<div class="row no-gutters">
    <div class="col-md-1"></div>
    <div class="col-md-10 col-sm-12 padding-0">
        <table style="width: 100%">
          <tbody>
              <tr>
                  <th ><h3 style="text-align: center;">Danh Sách Bài Viết</h3></th>
                  <th style="width: 250px;">
                      <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-append">
                              <a href=""class="btn btn-link"><i class='fas fa-search'style='margin: 5px; color: black;'></i></a> 
                          </div>
                      </div>  
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
          <tbody>                
          <tr>
            <th>ID</th>
            <th>Tên Bài Viết</th>
            <th style="width: 150px;">Tên chủ Đề </th>
            <th style="width: 150px;">Ngày Đăng</th>
            <th>Ảnh Đại Diện</th>
            <th style="text-align: center;">Xử Lý</th>
          </tr>
            @foreach($baiviet as $bv)
              <tr class="odd gradeX" align="">
              <td>{{$bv->id}}</td>
              <td>{{$bv->ten_bv}}</td>
              <td>{{$bv->chudebv->ten_cd}}</td>
              <td></td>
              <td></td>                
              <td style=' width: 150px;'>
              <a href="admin/baiviet/suabv/{{$bv->id}}"><i class='fas fa-pen-alt'style='margin: 5px;color:black'></i>Sửa</a>
              <a href="admin/baiviet/xoabv/{{$bv->id}}"><i class='fas fa-trash'style='margin: 5px;color: red'></i>Xóa</a></td>
            @endforeach
            </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-1"></div>
</div>
<div class="row no-gutters">
  <div class="col-md-5"></div>
    <div class="col-md-1">
      <nav aria-label="Page navigation example">
        <ul class="pagination pagination-sm">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
          </a>
        </li>
        </ul>
      </nav>
    </div>
  <div class="col-md-6"></div>
</div>
@endsection