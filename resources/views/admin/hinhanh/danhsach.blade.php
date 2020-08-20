@extends('pages.page')

@section('header')
<title>Danh sách hình ảnh</title>
@endsection

@section('content')
<!-- Page content -->
<div class="row no-gutters">
    <div class="col-md-2"></div>
    <div class="col-md-8 col-sm-12 padding-0">
      <table style="width: 100%">
          <tbody>
              <tr>
                <th ><h3 style="text-align: center;">Danh sách hình ảnh</h3></th>
                <th style="width: 250px;">
                  <form action="admin/hinhanh/danhsach/search" method="GET">
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
              <th>Tên</th>
              <th style='width:30%;'>Ảnh</th>
              <th>Sửa</th>
              @if(Auth::check())
              @if($ten_pq=='admin')
              <th style='width:150px;'>Xóa</th>
              @else

              @endif
              @endif
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
              @if(Auth::check())
              @if($ten_pq=='admin')
              <td class="center"><button class="btn btn-link" type='button' data-toggle="modal" data-target="#myModal{{$ha->id}}"><i class='fas fa-trash'style='margin: 5px;color: red'></i>Xóa</button>
                </td>
              @else

              @endif
              @endif
          </tr>
          <!-- The Modal -->
          <div class="modal fade" id="myModal{{$ha->id}}">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <!-- Modal body -->
                    <div class="modal-body">
                        Bạn có thật sự muốn xóa hình ảnh này?
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <a href="admin/hinhanh/xoahinhanh/{{$ha->id}}" class="btn btn-danger"><i class='fas fa-trash'style='margin: 5px;color: white'></i>Xóa</a>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
                    </div>
                    </div>
                </div>
            </div>
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

 