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
                <th></th>
            </tr>
            <tr>
                <td>01</td>
                <td>Hồ Chí Minh và phong cách lý luận gắn với thực tiễn</td>
                <td><a href=""><i class='fas fa-trash'style='margin: 5px;'></i>Xóa</a></td>
                <td><a href=""><i class='fas fa-pen-alt'style='margin: 5px;'></i>Sửa</a></td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-2"></div> 
</div>
<button type="button" class="btn btn-primary center">Thêm</a></button>
@endsection()