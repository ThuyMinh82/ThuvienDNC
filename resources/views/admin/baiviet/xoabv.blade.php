@extends('pages.page')

@section('header')
<title>Xóa bài viết</title>
@endsection

@section('content')
<div class="row no-gutters">
    <div class="col-md-3"></div>
    <div class="col-md-6 col-sm-12 padding-0">
        <h4>XÓA BÀI VIẾT</h4>       
        <table class="table table-hover">
            <tbody>
                <tr>
                    <td id='bold3'>Chọn bài viết:</td>
                    <td>
                        <select multiple class="form-control" id="select-user" style="height: 250px;">
                            <option>Hồ Chí Minh và phong cách lý luận gắn với thực tiễn</option>
                            <option>Nghiên cứu ảnh hưởng của bôi trơn tối thiểu (MQL) đến quá trình tạo phoi khi tiện thép 9crsi qua tôin</option>
                            <option>NỘI DUNG KÝ KẾT GIỮA ĐẠI HỌC FUTURE GENERATION và  THƯ VIỆN ĐẠI HỌC NAM CẦN THƠ</option>
                            <option>Toggle main menu visibility  TRANG CHỦ GIỚI THIỆU TRA CỨU OPAC SÁCH ĐIỆN TỬ TÀI LIỆU NỘI SINH TIN TỨC HƯỚNG DẪN SỬ DỤNG GÓC TẢN MẠN SV Hướng dẫn khai thác tài liệu trên website thư viện DNC</option>
                            <option value="">CAN THO NEWS: Khánh thành Trung tâm Thư viện điện tử Trường Đại học Nam Cần Thơ</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-3"></div> 
</div>
<button type="button" class="btn btn-primary center">Xóa</a></button>
@endsection()