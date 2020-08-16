@extends('giaodien.page')

@section('title')
<title>Thư viện điện tử Đại học Nam Cần Thơ</title>
@endsection

@section('content')
<div class="row">
    <div class="col-md-3 col-md-pull-6 col-sm-6 col-xs-12" id="bodyleft">
        <div class="panel-group">
            <div class="panel panel-default" id="thongbao">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-bullhorn"></span> <h4> Thông báo </h4>
                </div>

                <div class="panel-body">
                    <ul>
                        <li><a href="http://thuvien.nctu.edu.vn/index.php/news/danh-sach-sinh-vien-tre-han-tra-sach-tinh-den-30062020">Danh sách sinh viên trễ hạn trả sách</a></li>

                        <li><a href="https://drive.google.com/file/d/1BUBjjFkaOJINwtCvNR4p7YPSHqnH0xec/view?usp=sharing">Quy chế mượn sách</a></li>

                        <li><a href="https://nhandan.com.vn/thoi-su-phap-luat/canh-giac-nhung-cuoc-dien-thoai-lua-dao-460297/">Những điều cần cảnh giác</a></li>
                    </ul>
                </div>
            </div>
            <div class="panel panel-default" id="giomocua">
                <div class="panel-heading"><span class="glyphicon glyphicon-time"></span> <h4> Giờ phục vụ </h4>
                </div>

                <div class="panel-body">
                    <ul>
                        <li>Thứ Hai – Thứ Bảy</li>

                        <li>Phục vụ máy tính: 7:00 – 17:00</li>

                        <li>Phục vụ tài liệu mượn: 7:00 – 17:00</li>

                        <li>Thứ Bảy mở cửa lúc 9:00</li>

                        <li>Tầng 1,2: Đóng cửa buổi tối</li>

                        <li>Chủ Nhật và các ngày lễ quy định: Đóng cửa</li>
                    </ul>
                </div>
            </div>   
        </div>
    </div>

    <div class="col-sm-6"><marquee  scrollamount="7"><img src="{{asset('frontend/images/welcome.png')}}"></marquee>
        <div id="slides" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#slides" data-slide-to="0" class="active"></li>

                <li data-target="#slides" data-slide-to="1"></li>

                <li data-target="#slides" data-slide-to="2"></li>

                <li data-target="#slides" data-slide-to="3"></li>
            </ul>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('frontend/images/block-banner.png')}}">
                </div>

                <div class="carousel-item">
                    <img src="{{asset('frontend/images/logo.png')}}">
                </div>

                <div class="carousel-item">
                    <img src="{{asset('frontend/images/block-banner.png')}}">
                </div>

                <div class="carousel-item">
                    <img src="{{asset('frontend/images/logo.png')}}">
                </div>
            </div>

            <a class="carousel-control-prev" href="#slides" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>

            <a class="carousel-control-next" href="#slides" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

        <div class="carousel-body">

            <div class="row w-main">
                <div class="col-sm-4 img-avatar text-center">
                    <a href="http://thuvien.nctu.edu.vn/index.php/news/lan-toa-cuoc-thi-dai-su-van-hoa-doc-2020"><img src="http://thuvien.nctu.edu.vn/upload/lantoa1.jpg"  id="hinh"></a>
                </div>

                <div class="col-sm-8 w-main-right">
                    <div class="main">  
                        <div class="hidden-xs"><a class="title-ls-news" href="http://thuvien.nctu.edu.vn/index.php/news/lan-toa-cuoc-thi-dai-su-van-hoa-doc-2020">Lan tỏa Cuộc thi Đại sứ Văn hóa đọc 2020</a>
                        </div>

                        <div class="support-tilte">Tin tức &amp; Sự kiện - 01/06/2020</div>
                        
                        <span>Cuộc thi Đại sứ Văn hóa đọc 2020 vòng sơ khảo bắt đầu được triển khai từ tháng 2 năm 2020. Đến thời điểm hiện tại đã có hàng chục nghìn bài dự thi tham…</span>
                    </div>          
                </div>        
            </div>
            <div class="duongvien"></div>

            <div class="row w-main">
                <div class="col-sm-4 img-avatar text-center">
                    <a href="http://thuvien.nctu.edu.vn/index.php/news/huong-dan-tham-gia-cuoc-thi-dai-su-van-hoa-doc-2020"><img src="http://thuvien.nctu.edu.vn/upload/vhd22.jpg"  id="hinh"></a>
                </div>

                <div class="col-sm-8 w-main-right">
                    <div class="main">  
                        <div class="hidden-xs"><a class="title-ls-news" href="http://thuvien.nctu.edu.vn/index.php/news/huong-dan-tham-gia-cuoc-thi-dai-su-van-hoa-doc-2020">Hướng dẫn tham gia Cuộc thi Đại sứ Văn hóa đọc 2020</a>
                        </div>

                        <div class="support-tilte">Tin tức &amp; Sự kiện - 20/05/2020</div>
                        
                        <span>Để cuộc thi Đại sứ Văn hóa đọc thực sự là một sân chơi bổ ích cho học sinh và sinh viên trong cả nước, góp phần thúc đẩy phong trào đọc trong thế hệ…</span>
                    </div>
                </div>          
            </div>

            <div class="duongvien"></div>

            <div class="row w-main">
                <div class="col-sm-4 img-avatar text-center">
                    <a href="http://thuvien.nctu.edu.vn/index.php/news/gioi-thieu-cau-lac-bo-ban-doc-thu-vien-dai-hoc-nam-can-tho"><img src="http://thuvien.nctu.edu.vn/upload/block-banner1.png"  id="hinh"></a>
                </div>

                <div class="col-sm-8 w-main-right">
                    <div class="main">  
                        <div class="hidden-xs"><a class="title-ls-news" href="http://thuvien.nctu.edu.vn/index.php/news/gioi-thieu-cau-lac-bo-ban-doc-thu-vien-dai-hoc-nam-can-tho">Giới thiệu Câu lạc bộ Bạn đọc - Thư viện Đại học Nam Cần Thơ</a>
                        </div>
                        
                        <div class="support-tilte">Tin tức &amp; Sự kiện - 24/07/2020</div>
                        
                        <span>Nhằm góp phần phát triển Thư viện cũng như nâng cao chất lượng phục vụ bạn đọc, cùng với đáp ứng nhu cầu của một số bạn đọc muốn được sinh hoạt cùng thư…</span>
                    </div> 
                </div>          
            </div>

            <div class="duongvien"></div>

            <div class="row w-main">
                <div class="col-sm-4 img-avatar text-center">
                    <a href="http://thuvien.nctu.edu.vn/index.php/news/lieu-phap-doc-sach-trong-hoat-dong-thu-vien"><img src="http://thuvien.nctu.edu.vn/upload/mot-vai-net-ve-noi-dung-tv-bia.jpg"  id="hinh"></a>
                </div>

                <div class="col-sm-8 w-main-right">
                    <div class="main">  
                        <div class="hidden-xs"><a class="title-ls-news" href="http://thuvien.nctu.edu.vn/index.php/news/lieu-phap-doc-sach-trong-hoat-dong-thu-vien">Liệu pháp đọc sách trong hoạt động thư viện</a>
                        </div>
                        
                        <div class="support-tilte">Tin tức &amp; Sự kiện - 23/12/2019</div>
                        
                        <span>Là một loại sản phẩm đặc biệt do con người tạo ra, sách có nhiều lợi thế và tác dụng tích cực</span>
                    </div>
                </div>          
            </div>

            <div class="duongvien"></div>

            <div class="row w-main">
                <div class="col-sm-4 img-avatar text-center">
                    <a href="http://thuvien.nctu.edu.vn/index.php/news/hoi-nghi-ban-doc-lan-2-thu-vien-la-ngoi-nha-thu-2-cua-sinh-vien"><img src="http://thuvien.nctu.edu.vn/upload/HNBDpp1.png"  id="hinh"></a>
                </div>

                <div class="col-sm-8 w-main-right">
                    <div class="main">  
                        <div class="hidden-xs"><a class="title-ls-news" href="http://thuvien.nctu.edu.vn/index.php/news/hoi-nghi-ban-doc-lan-2-thu-vien-la-ngoi-nha-thu-2-cua-sinh-vien">Hội nghị bạn đọc lần 2 - Thư viện là ngôi nhà thứ 2 của sinh viên</a>
                        </div>
                        
                        <div class="support-tilte">Tin tức &amp; Sự kiện - 30/11/2019</div>
                        
                        <span>Thư viện DNC là không gian dành cho cán bộ, giảng viên, sinh viên của trường, các bạn ngoài việc đến học bài/ nghiên cứu tài liệu/ sử dụng máy tính/ đọc…</span>
                    </div>
                </div>          
            </div>

            <div class="duongvien"></div>

            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </div>
    </div>


<div class="col-md-3 col-md-pull-6 col-sm-6 col-xs-12" id="bodyright">
    <div class="panel-group">
        <div class="panel panel-default" id="tinmoinhat">
            <a href="tintuc.html">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-bullhorn"></span><h4> Tin mới nhất </h4>
                </div>
            </a>

            <div class="panel-body">
                <div class="panel-lib">
                    <div id="latestnews" class="vticker col-content-search-nctu">
                        <ul>
                            <li>
                                <a href="http://thuvien.nctu.edu.vn/index.php/news/sach-tham-khao-bai-tap-va-bai-giai-ke-toan-tai-chinh"  class="text-primary">Sách Tham Khảo Bài Tập Và Bài Giải Kế Toán Tài Chính</a><span class="date-newstick"> <i>Giới thiệu sách - 15/07/2020</i></span>
                            </li>

                            <li>
                                <a href="http://thuvien.nctu.edu.vn/index.php/news/luat-doanh-nghiep-viet-nam-tinh-huong-dan-giai-binh-luan"  class="text-primary">Luật Doanh Nghiệp Việt Nam Tình huống - Dẫn giải - Bình luận</a><span class="date-newstick"> <i>Giới thiệu sách - 10/07/2020</i></span>
                            </li>

                            <li>
                                <a href="http://thuvien.nctu.edu.vn/index.php/news/chum-anh-ve-thu-vien-dai-hoc-nam-can-tho" class="text-primary">Chùm ảnh về thư viện đại học Nam Cần Thơ</a><span class="date-newstick"> <i>Góc ảnh - 10/07/2020</i></span>
                            </li>

                            <li>
                                <a href="http://thuvien.nctu.edu.vn/index.php/news/danh-sach-sinh-vien-tre-han-tra-sach-tinh-den-30062020" class="text-primary">Danh sách sinh viên trễ hạn trả sách tính đến 30/06/2020</a><span class="date-newstick"> <i>Thông báo - 09/07/2020</i></span>
                            </li>

                            <li>
                                <a href="http://thuvien.nctu.edu.vn/index.php/news/nguoi-ban-hang-gioi-phai-ban-minh-truoc"  class="text-primary">Người Bán Hàng Giỏi Phải Bán Mình Trước</a><span class="date-newstick"> <i>Giới thiệu sách - 03/07/2020</i></span>
                            </li>

                            <li>
                                <a href="http://thuvien.nctu.edu.vn/index.php/news/100-phuong-phap-truyen-dong-luc-cho-doi-nhom-chien-thang" class="text-primary">100 Phương Pháp Truyền Động Lực Cho Đội Nhóm Chiến Thắng</a><span class="date-newstick"> <i>Giới thiệu sách - 29/06/2020</i></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
          
            <div class="panel panel-default" id="lienketwebsite">
                <div class="panel-heading"><span class="glyphicon glyphicon-bullhorn"></span><h4> Liên kết website </h4>
                </div>

                <div class="panel-body">
                    <div class="panel-lib">
                        <div class="col-content-search-nctu">       
                            <ul>
                                <li>
                                    <a href="http://vilasal.org.vn/" target="_blank">Liên chi hội Thư viện khu vực phía Nam</a>
                                </li>

                                <li>
                                    <a href="https://thuvienphapluat.vn/" target="_blank">Trang Thư viện Pháp luật </a>
                                </li>

                                <li>
                                    <a href="http://chinhphu.vn/portal/page/portal/chinhphu/trangchu" target="_blank">Cổng thông tin điện tử Chính phủ</a>
                                </li>

                                <li>
                                    <a href="http://nlv.gov.vn" target="_blank">Thư viện Quốc Gia Việt Nam</a>
                                </li>

                                <li>
                                    <a href="http://www.vla.org.vn/" target="_blank">Hội thư viện Việt Nam</a>
                                </li>

                                <li>
                                    <a href="http://www.vjol.info" target="_blank">Tạp chí khoa học Việt Nam Trực tuyến</a>
                                </li>

                                <li>
                                    <a href="http://repository.vnu.edu.vn/" target="_blank">Thư viện Đại học Quốc Gia Hà Nội</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default" id="gioithieusach">
                <a href="http://thuvien.nctu.edu.vn/index.php/topic/7">
                    <div class="panel-heading"><span class="glyphicon glyphicon-bullhorn"></span><h4> Giới thiệu sách </h4>
                    </div>
                </a>
                
                <div class="panel-body">
                    <div class="col-content-search-nctu">
                        <div id="secondary-carousel" class="indicator owl-carousel owl-theme owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="row">
                                    <div class="col-sm-12 pad0">
                                        <a href="http://thuvien.nctu.edu.vn/index.php/news/viet-nam-non-song-gam-voc-mien-bac-trung-nam">
                                            <img src="http://thuvien.nctu.edu.vn/upload/vnnsgvbia1.jpg" class="owlC1">
                                        </a>
                                        <a href="http://thuvien.nctu.edu.vn/index.php/news/viet-nam-non-song-gam-voc-mien-bac-trung-nam">
                                            <img src="http://thuvien.nctu.edu.vn/upload/vnnsgvbia1.jpg" class="owlC1">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default" id="video">
                <div class="panel-heading"><span class="glyphicon glyphicon-bullhorn"></span><h4> Video </h4>
                </div>

                <div class="panel-body">
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/zg1S-2vNg20?start=213" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection


