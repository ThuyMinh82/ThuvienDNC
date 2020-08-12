@extends('pages.page')

@section('header')
<title>Duyệt bài viết</title>
@endsection

@section('content')
<div class="row no-gutters">
    <div class="col-md-2"></div>
    <div class="col-md-8 col-sm-12 padding-0">
        <h4>DUYỆT BÀI VIẾT</h4> 
        <table class="table table-hover">
            <tbody>
                <tr>
                    <td id='bold2'>Chọn bài viết:</td>
                    <td>
                        <select multiple class="form-control" id="select-user" style="height: 250px;">
                            <option>Hồ Chí Minh và phong cách lý luận gắn với thực tiễn</option>
                            <option>Nghiên cứu ảnh hưởng của bôi trơn tối thiểu (MQL) đến quá trình tạo phoi khi tiện thép 9crsi qua tôin</option>
                            <option>NỘI DUNG KÝ KẾT GIỮA ĐẠI HỌC FUTURE GENERATION và  THƯ VIỆN ĐẠI HỌC NAM CẦN THƠ</option>
                            <option>Toggle main menu visibility  TRANG CHỦ GIỚI THIỆU TRA CỨU OPAC SÁCH ĐIỆN TỬ TÀI LIỆU NỘI SINH TIN TỨC HƯỚNG DẪN SỬ DỤNG GÓC TẢN MẠN SV Hướng dẫn khai thác tài liệu trên website thư viện DNC</option>
                            <option value="">CAN THO NEWS: Khánh thành Trung tâm Thư viện điện tử Trường Đại học Nam Cần Thơ</option>
                        </select>
                    </td>
                    <td><button type="button" class="btn btn-primary auto">Chọn</button></td>
                </tr>  
            </tbody>
        </table>   
        <div style="margin-top: 7px; border: 1px solid #cccccc;">
            <h4 style="color: blue;border-left: 3px solid red;padding-left: 5px;background: #dae8f7;padding-top: 6px;padding-bottom: 6px;margin: 0px;">Lan tỏa Cuộc thi Đại sứ Văn hóa đọc 2020</h4>	<div class="support-tilte">Chuyên mục: Tin tức &amp; Sự kiện - 01/06/2020</div>
        </div>
    </div>
    <div class="col-md-2"></div> 
</div>
<br>
<button type="button" class="btn btn-primary center">Duyệt</a></button>
@endsection