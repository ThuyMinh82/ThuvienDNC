@extends('admin.layout.page')

@section('header')
<title>Sửa chủ đề</title>
@endsection

@section('content')
<div class="row no-gutters">
    <div class="col-md-3"></div>
    <div class="col-md-6 col-sm-12 padding-0">
        <h4>Danh Sách Chủ Đề</h4>       
            <table class="table table-hover">
                <tbody>
                <tr>
                    <th>ID</th>
                    <th>Tên chủ đề</th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td>01</td>
                    <td>Tin tức - Sự kiện</td>
                    <td><a href=""><i class='fas fa-trash'style='margin: 5px;'></i>Xóa</a></td>
                    <td><a href=""><i class='fas fa-pen-alt'style='margin: 5px;'></i>Sửa</a></td>
                </tr>
                </tbody>
            </table>
    </div>
    <div class="col-md-3"></div> 
</div>
<button type="button" class="btn btn-primary center">Lưu</button>
@endsection()