@extends('pages.page')

@section('header')
<title>Danh sách chủ đề</title>
@endsection

@section('content')
<!-- Page content -->
@if($ten_pq=='admin')
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
              <td class="center"><i class="fas fa-trash" style="color: red;"></i><a href="admin/chudebv/xoachude/{{$cd->id}}">Xóa
              </a></td>
          </tr>
          @endforeach
      </tbody>
    </table>
    <nav aria-label="Page navigation example" style='float: right;'>
      {{ $chudebv->links() }}
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

@endsection

