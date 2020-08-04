/@extends('admin.layout.page')

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
            <div style="padding: 14px;">
            <h1 style="text-align:center"><span style="font-size:28px"><span style="color:#3498db">Lan tỏa Cuộc thi Đại sứ Văn hóa đọc 2020</span></span></h1>
        
        <p>&nbsp;</p>
        
        <p><strong>Cuộc thi Đại sứ Văn hóa đọc 2020 vòng sơ khảo bắt đầu được triển khai từ tháng 2 năm 2020. Đến thời điểm hiện tại đã có hàng chục nghìn bài dự thi tham gia vòng sơ khảo tại các tỉnh/thành phố, các trường đại học, cao đẳng thuộc lực lượng vũ trang và trên toàn quốc.</strong></p>
        
        <p>Cuộc thi Đại sứ Văn hóa đọc 2020 vòng sơ khảo đang được tiến hành tại các địa phương, bộ ngành, các trường đại học, cao đẳng và các đơn vị đồng hành với Bộ Văn hóa, Thể thao và Du lịch (VHTTDL). Hàng chục nghìn bài dự thi đã được gửi về Ban tổ chức vòng sơ khảo. Chỉ tính riêng tỉnh Hà Tĩnh sau 2 tháng phát động đã thu được gần 30 nghìn bài dự thi.</p>
        
        <p>Trước đó, Bộ VHTTDL đã có các văn bản hướng dẫn tổ chức Cuộc thi gửi các địa phương và một số Bộ, ngành, đơn vị. Ngày 09 tháng 4 năm 2020, Bộ Giáo dục đào tạo có công văn số 1230/BGDĐT-GDTX gửi các Sở Gáo dục và Đào tạo, các đại học, học viện khuyến khích người học tham gia các hoạt động liên quan đến phát triển văn hóa đọc, trong đó có Cuộc thi Đại sứ Văn hóa đọc 2020 do Bộ VHTTDL tổ chức.</p>
        
        <p>Để tạo điều kiện cho các học sinh, sinh viên có thể tham gia thuận lợi đối với các địa phương và nhà trường không tổ chức vòng sơ khảo, Ban Tổ chức đã phối hợp với Báo Thiếu niên tiền phong và Nhi đồng, Nhà xuất bản Giáo dục Việt Nam, Báo Tiền phong phổ biến các địa điểm nhận bài dự thi theo từng lứa tuổi như sau:</p>
        
        <p>- Địa chỉ nhận bài dự thi dành cho học sinh tiểu học và trung học cơ sở: Báo Thiếu niên tiền phong và Nhi đồng, số 3, Nguyễn Quý Đức, quận Thanh Xuân, Hà Nội. Bài dự thi có thể gửi qua email:&nbsp;<strong>daisuvanhoadoc2020.tntpnd@gmail.com.</strong></p>
        
        <p>- Địa chỉ nhận bài dự thi dành cho học sinh trung học phổ thông: Nhà xuất bản Giáo dục Việt Nam, Tầng 2, số 73, Lò Đúc,&nbsp;phường Phạm Đình Hổ, quận Hai Bà Trưng, thành phố Hà Nội. Bài dự thi có thể gửi qua email:&nbsp;<strong><a href="mailto:daisuvanhoadoc2020@odes.edu.vn">daisuvanhoadoc2020@oes.edu.vn</a></strong>.</p>
        
        <p>- Địa chỉ nhận bài dự thi dành cho sinh viên: Chuyên trang Sinh viên Việt Nam, báo Tiền phong, Ô D29, Khu đô thị mới Cầu Giấy, Phạm Văn Bạch, thành phố Hà Nội. Bài dự thi có thể gửi qua email:&nbsp;<strong>sinhvien@baotienphong.com.vn.</strong></p>
        
        <p><strong><em>Lưu ý:&nbsp;</em></strong>Do có nhiều đơn vị tổ chức vòng sơ khảo, đề nghị thí sinh chỉ gửi đến một nơi để tránh trùng lặp khi lựa chọn các bài thi tham dự vòng chung kết.</p>
        
        <p style="text-align:center"><img src="http://thuvien.nctu.edu.vn/upload/lantoa.jpg" style="height:450px; width:600px"></p>
        
        <p style="text-align:center">Ảnh: Bài dự thi Vòng sơ khảo Cuộc thi Đại sứ Văn hóa đọc tỉnh Hà Tĩnh</p>
        
        <p>Riêng đối với đối tượng người khiếm thị, Hội người mù Việt Nam đã có văn bản hướng dẫn dự thi gửi đến các cấp hội người mù, theo đó tại vòng sơ khảo, các bài dự thi của người khiếm thị sẽ được nộp tại chi hội người mù các địa phương. Trong trường hợp không có chi hội người mù hoặc chi hội người mù không tham gia cuộc thi, thí sinh khiếm thị có thể gửi bài dự thi về các thư viện tỉnh, từ đó các thư viện tỉnh sẽ tổng hợp gửi bài lên Hội người mù Việt Nam. Hướng dẫn chi tiết Cuộc thi cho các học sinh, sinh viên khiếm thị có thể tham khảo&nbsp;<u><strong><a href="http://vuthuvien.bvhttdl.gov.vn/document.aspx?sitepageid=633&amp;id=19700">tại đây</a></strong></u>.</p>
        
        <p style="text-align:right">&nbsp;</p>
        
        <p style="text-align:right"><strong>BTC</strong><strong>&nbsp;Cuộc thi Đại sứ Văn hóa đọc 2020</strong></p>
        
        <p style="text-align:right"><em>(daisuvanhoadoc2020@bvhttdl.gov.vn)</em></p>
        
        <p style="text-align:right"><em><strong>Nguồn:&nbsp;<a href="http://vuthuvien.bvhttdl.gov.vn/articledetail.aspx?sitepageid=625&amp;articleid=10955">http://vuthuvien.bvhttdl.gov.vn/articledetail.aspx?sitepageid=625&amp;articleid=10955</a></strong></em></p>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div> 
</div>
<br>
<button type="button" class="btn btn-primary center">Duyệt</a></button>
@endsection