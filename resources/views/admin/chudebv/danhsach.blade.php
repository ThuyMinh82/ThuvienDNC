@extends('pages.page')

@section('header')
<title>Danh sách chủ đề</title>
@endsection

@section('content')
<!-- Page content -->
<div class="row no-gutters">
    <div class="col-md-2"></div>
    <div class="col-md-8 col-sm-12 padding-0">
      <h1 class="page-header" style="text-align: center;">Danh sách chủ đề</h1>
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
              <th>Tên</th>
              <th>Sửa</th>
              <th>Xóa</th>
          </tr>
      </thead>
      <tbody>
          @foreach($chudebv as $cd)
          <tr class="odd gradeX" align="center">
              <td>{{$cd->id}}</td>
              <td>{{$cd->ten_cd}}</td>
              <td class="center"><i class="fas fa-pen-alt"></i><a href="admin/chudebv/suachude/{{$cd->id}}">Sửa
              </a></td>
              <td class="center"><i class="fas fa-trash" data-toggle="modal" data-target="#myModal"></i><a href="admin/chudebv/xoachude/{{$cd->id}}">Xóa
              </a></td>
          </tr>
          @endforeach
      </tbody>
    </table>
    </div>
</div>
    <div class="col-md-2"></div> 
<!-- <div class="modal" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Xóa Chủ Đề</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    </div>
</div> -->
@endsection

