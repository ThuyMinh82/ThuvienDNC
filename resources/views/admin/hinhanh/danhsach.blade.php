@extends('pages.page')

@section('header')
<title>Danh sách hình ảnh</title>
@endsection

@section('content')
<!-- Page content -->
<div class="row no-gutters">
    <div class="col-md-2"></div>
    <div class="col-md-8 col-sm-12 padding-0">
      <h1 class="page-header" style="text-align: center;">Danh sách hình ảnh</h1>
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
              <th style='width:30%;'>Ảnh</th>
              <th>Sửa</th>
              <th>Xóa</th>
          </tr>
      </thead>
      <tbody>
          @foreach($hinhanh as $ha)
          <tr class="odd gradeX" align="center">
              <td>{{$ha->id}}</td>
              <td>{{$ha->ten_anh}}</td>
              <td> <a href="{{$ha->link_anh}}"> <img style='width:80px; height:60px' src="{{$ha->link_anh}}"></a></td>
              <td class="center"><i class="fas fa-pen-alt"></i><a href="admin/hinhanh/suahinhanh/{{$ha->id}}">Sửa
              </a></td>
              <td class="center"><i style="color: red;" class="fas fa-trash" data-toggle="modal" data-target="#myModal"></i><a href="admin/hinhanh/xoahinhanh/{{$ha->id}}">Xóa
              </a></td>
          </tr>
          @endforeach
      </tbody>
    </table>
    <nav aria-label="Page navigation example" style='float: right;'>
      {{ $hinhanh->links() }}
    </nav>
    </div>
    <div class="col-md-2"></div> 
</div>
@endsection

 