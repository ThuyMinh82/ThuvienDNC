@extends('admin.layout.page')

@section('header')
<title>Sửa chủ đề</title>
@endsection

@section('content')
<div class="row no-gutters">
    <div class="col-md-3"></div>
    <div class="col-md-6 col-sm-12 padding-0">
        <h4>SỬA CHỦ ĐỀ</h4>       
        <table class="table table-hover">
            <tbody>
            <tr>
                <td id='bold2'>Chọn chủ đề:</td>
                <td>
                    <select multiple class="form-control" id="select-user">
                        <option>Góc tản mạn sinh viên</option>
                        <option>Tin tức & sự kiện</option>
                        <option>Giới thiệu sách</option>
                        <option>Sách tặng</option>
                        <option value="">TRƯỜNG ĐẠI HỌC NAM CẦN THƠ- KHÁNH THÀNH TRUNG TÂM THƯ VIỆN ĐIỆN TỬ VÀ KHAI GIẢNG NĂM HỌC MỚI 2017-2018</option>
                    </select>
                </td>
                <td><button type="button" class="btn btn-primary bottom">Chọn</button></td>
            </tr>
            <tr>
                <td id='bold'>Sửa:</td>
                <td colspan="2"><input class="form-control" id="focusedInput" type="text" value=></td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-3"></div> 
</div>
<button type="button" class="btn btn-primary center">Lưu</button>
@endsection()