@extends('pages.page')

@section('header')
<title>Danh sách tài khoản</title>
@endsection

@section('content')
    <div class="row no-gutters">
        <div class="col-md-2"></div>
        <div class="col-md-8 col-sm-12 padding-0">
            <table style="width: 100%">
                <tbody>
                    <tr>
                        <th ><h4 style="text-align: left;">Danh Sách Tài Khoản</h4></th>
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
            <table class="table table-hover">
                <tbody>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Group</th>
                    <th>Phân Quyền</th>
                    <th>Status</th>
                    <th>Xử Lý</th>
                </tr>
                <tr>
                    @foreach($users as $tk)
                        <tr class="odd gradeX" align="">
                        <td>{{$tk->id}}</td>
                        <td><a href="">{{$tk->username}}</a></td>
                        <td>{{$tk->group->usergroup_id}}</td>
                        <td><a href="">{{$tk->id}}</a></td>
                        <td>{{$tk->status}}</td>
                        <td>
                            <a href="" data-toggle="modal" data-target="#myModal"><i class='fas fa-trash'style='margin: 5px; color: red;'></i>Xóa</a>
                        </td>
                    </tr>
                    @endforeach
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
              <h5 class="modal-title">Xóa User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Bạn có chắc muốn xóa User này không?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Xóa ngay</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
            </div>
          </div>
        </div>
    </div>
@endsection()