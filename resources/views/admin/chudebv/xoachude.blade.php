@extends('admin.layout.page')

@section('header')
<title>Xóa chủ đề</title>
@endsection

@section('content')
<div class="row no-gutters">
    <div class="col-md-3"></div>
    <div class="col-md-6 col-sm-12 padding-0">
        <h4>XÓA CHỦ ĐỀ</h4>       
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
                    </select>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-3"></div> 
</div>
<button type="button" class="btn btn-primary center">Xóa</button>
@endsection()