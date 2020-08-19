@extends('pages.page')

@section('header')
<title>Danh Sách Bài Viết Đã Duyệt</title>
@endsection

@section('content')
<!-- Page content -->
<div class="row no-gutters">
    <div class="col-md-1"></div>
    <div class="col-md-10 col-sm-12 padding-0">
        <table style="width: 100%">
          <tbody>
              <tr>
                  <th ><h3 style="text-align: center;">Duyệt Bài Viết</h3></th>
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
              <th style="text-align: center;">Xử Lý</th>
            </tr>
            <tr>
            @foreach($baiviet as $bv)
              <tr class="odd gradeX" align="">
              <td>{{$bv->id}}</td>
              <td>{{$bv->ten_bv}}</td>
              <td>{{$bv->chudebv->ten_cd}}</td>               
              <td style=' width: 150px;'>
              <a href="admin/baiviet/duyetbv/{{$bv->id}}"><i class='fas fa-check-square'style='margin: 5px;color:black'></i>Duyệt</a></td>
            @endforeach
            </tr>
          </tbody>
        </table>
          <nav aria-label="Page navigation example" style='float: right;'>
              {{ $baiviet->links() }}
          </nav>
        </div>
    </div>
  </div>
</div>

@endsection