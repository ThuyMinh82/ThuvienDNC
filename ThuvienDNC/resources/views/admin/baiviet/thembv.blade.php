@extends('admin.layout.page')

@section('header')
<title>Thêm bài viết</title>
@endsection

@section('content')
<div class="row no-gutters">
    <div class="col-md-2"></div>
    <div class="col-md-8 col-sm-12 padding-0">
        <h4>THÊM BÀI VIẾT</h4>     
        <table class="table table-hover">
            <tbody>
            <!--Hàng thêm tên bài viết-->
            <tr>
                <td id='bold2'>Tên bài viết:</td>
                <td><input class="form-control" id="focusedInput" type="text" value=""></td>
            </tr>
            <!--Kết thúc hàng thêm tên bài viết-->
            <!--Chọn chủ đề-->
            <tr>
                <td id='bold2'>Chọn chủ đề:</td>
                <td>
                    <select multiple class="form-control" id="select-user">
                        <option>Góc tản mạn sinh viên</option>
                        <option>Tin tức & sự kiện</option>
                        <option>Giới thiệu sách</option>
                        <option>Sách tặng</option> 
                    </select>
                </td>
            </tr>
            <!--Kết thúc chọn chủ đề-->
            <!--Mô tả ngắn-->
            <tr>
                <td id='bold'>Mô tả ngắn</td>
                <td><textarea class="form-control" name="" id="" cols="80" rows="5"></textarea></td>
            </tr>
            <!--Kết thúc mô tả ngắn-->
            <!--Nội dung bài viết-->
            <tr>
                <td id='bold'>Nội dung bài viết:</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">
                    <form action="" method="post" enctype="multipart/form-data">
                        <textarea class="ckeditor" name="editor"></textarea>
                    </form> 
                </td> 
            </tr>
            <!--Kết thúc nội dung bài viết-->
            </tbody>
        </table>
    </div>
    <div class="col-md-2"></div> 
</div>
<button type="button" class="btn btn-primary center">Thêm</a></button>
<br>
<br>
<br>
<br>
@endsection()