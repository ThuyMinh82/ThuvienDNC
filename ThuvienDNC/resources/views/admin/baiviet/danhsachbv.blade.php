@extends('admin.layout.page')

@section('header')
<title>Thêm bài viết</title>
@endsection

@section('content')
<div class="row no-gutters">
    <div class="col-md-2"></div>
    <div class="col-md-8 col-sm-12 padding-0">
        <h4>Danh Sách Bài Viết</h4>     
        <table class="table table-hover">
            <tbody>
            <tr>
                <th>ID</th>
                <th>Tên Bài Viết</th>
                <th></th>
                <th>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                            <a href=""class="btn btn-link"><i class='fas fa-search'style='margin: 5px; color: black;'></i></a> 
                        </div>
                    </div>
                </th>
            </tr>
            <tr>
                <td>01</td>
                <td>Hồ Chí Minh và phong cách lý luận gắn với thực tiễn</td>
                <td><a href=""><i class='fas fa-pen-alt'style='margin: 5px;'></i>Sửa</a></td>
                <td><a href="" data-toggle="modal" data-target="#myModal"><i class='fas fa-trash'style='margin: 5px;'></i>Xóa</a></td>
            </tr>
            </tbody>
        </table>
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
    </div>
    <div class="col-md-2"></div> 
</div>
<div class="modal" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Xóa Bài viết</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Bạn có chắc muốn xóa Bài viết này?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Xóa ngay</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
</div>
@endsection()