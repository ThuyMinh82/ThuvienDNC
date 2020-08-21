@extends('giaodien.page')

@section('title')
<title>Thư viện điện tử Đại học Nam Cần Thơ</title>
@endsection

@section('content')
<div class="row no-gutters">
    <div class="col-xl-1"></div>
    <div class="col-md-2 col-md-pull-6 col-sm-6 col-xs-12" id="bodyleft">
        <div class="panel-group">
            <div class="row">
                <div class="col-xl-12 col-sm-12 padding-0">
                    <div class="panel panel-default" id="thongbao">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-bullhorn"></span> <h5> Thông báo </h5>
                        </div>

                        <div class="panel-body">
                            <div style="border-bottom: 1px solid #ccc;">
                                <a href="http://thuvien.nctu.edu.vn/index.php/news/danh-sach-sinh-vien-tre-han-tra-sach-tinh-den-30062020">Danh sách sinh viên trễ hạn trả sách</a>
                            </div>
                            <div style="border-bottom: 1px solid #ccc;">
                                <a href="https://drive.google.com/file/d/1BUBjjFkaOJINwtCvNR4p7YPSHqnH0xec/view?usp=sharing">Quy chế mượn sách</a>
                            </div>
                            <div style="border-bottom: 1px solid #ccc;">
                                <a href="https://nhandan.com.vn/thoi-su-phap-luat/canh-giac-nhung-cuoc-dien-thoai-lua-dao-460297/">Những điều cần cảnh giác</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default" id="giomocua">
                        <div class="panel-heading"><span class="glyphicon glyphicon-time"></span> <h5> Giờ phục vụ </h5>
                        </div>

                        <div class="panel-body">
                            <div style="border-bottom: 1px solid #ccc;">
                                <h7>Thứ Hai – Thứ Bảy</h7>
                            </div>
                            <div style="border-bottom: 1px solid #ccc;">
                                <h7>Phục vụ máy tính: 7:00 – 17:00</h7>
                            </div>
                            <div style="border-bottom: 1px solid #ccc;">
                                <h7>Phục vụ tài liệu mượn: 7:00 – 17:00</h7>
                            </div>
                            <div style="border-bottom: 1px solid #ccc;">
                                <h7>Thứ Bảy mở cửa lúc 9:00</h7>
                            </div>
                            <div style="border-bottom: 1px solid #ccc;">
                                <h7>Tầng 1,2: Đóng cửa buổi tối</h7>
                            </div>
                            <div style="border-bottom: 1px solid #ccc;">
                                <h7>Chủ Nhật và các ngày lễ quy định: Đóng cửa</h7>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <div class="col-sm-6"><marquee  scrollamount="7"><img src="{{asset('frontend/images/welcome.png')}}"></marquee>
        <div class="row no-gutters"id='center'>
            <div class="col-xl-12 col-sm-12 padding-0" >
                <div id="slides" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#slides" data-slide-to="0" class="active"></li>

                        <li data-target="#slides" data-slide-to="1"></li>

                        <li data-target="#slides" data-slide-to="2"></li>

                        <li data-target="#slides" data-slide-to="3"></li>
                    </ul>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img style="width: 100%; height: 250px;" src="{{asset('frontend/images/Thu-vien1.png')}}">
                        </div>

                        <div class="carousel-item">
                            <img style="width: 100%; height: 250px;" src="{{asset('frontend/images/Thu-vien2.jpg')}}">
                        </div>

                        <div class="carousel-item">
                            <img style="width: 100%; height: 250px;" src="{{asset('frontend/images/Thu-vien3.jpg')}}">
                        </div>

                        <div class="carousel-item">
                            <img style="width: 100%; height: 250px;" src="{{asset('frontend/images/Thu-vien4.jpg')}}">
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#slides" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>

                    <a class="carousel-control-next" href="#slides" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>

                <div class="carousel-body" style="margin-top: 55px;">
                    <div class="row w-main">
                        @foreach($baiviet as $bv)
                        <div class="col-sm-4 img-avatar text-center">
                            <a href="xembaiviet/{{$bv->id}}"><img style="width: 190px; height: 120px;" src="{{$bv->anhdaidien}}" id="hinh"></a>
                        </div>
                        <div class="col-sm-8 w-main-right">
                            <div class="main"> 
                                <div class="hidden-xs">
                                    <a class="title-ls-news" href="xembaiviet/{{$bv->id}}">{{$bv->ten_bv}}</a>
                                </div>
                                <div class="support-tilte">{{$bv->chudebv->ten_cd}}</div>     
                                <span>{!! $bv->mtngan_bv !!}</span>
                            </div>
                        </div>
                        @endforeach
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
        </div>
    </div>

    <div class="col-md-2 col-md-pull-6 col-sm-6 col-xs-12" id="bodyright">
        <div class="panel-group">
            <div class="panel panel-default" id="tinmoinhat">
                <a href="tintuc.html">
                    <div class="panel-heading">
                        <span class="glyphicon glyphicon-bullhorn"></span><h5> Tin mới nhất </h5>
                    </div>
                </a>

                <div class="panel-body">
                    <div style="border-bottom: 1px solid #ccc;">
                        <a href="http://thuvien.nctu.edu.vn/index.php/news/sach-tham-khao-bai-tap-va-bai-giai-ke-toan-tai-chinh"  class="text-primary">Sách tham khảo bài tập và bài giải kế toán tài chính</a><span class="date-newstick"><br><i>Giới thiệu sách - 15/07/2020</i></span>
                    </div>
                    <div style="border-bottom: 1px solid #ccc;">
                        <a href="http://thuvien.nctu.edu.vn/index.php/news/luat-doanh-nghiep-viet-nam-tinh-huong-dan-giai-binh-luan"  class="text-primary">Luật doanh nghiệp Việt Nam tình huống - Dẫn giải - Bình luận</a><span class="date-newstick"><br><i>Giới thiệu sách - 10/07/2020</i></span>
                    </div>
                    <div style="border-bottom: 1px solid #ccc;">
                        <a href="http://thuvien.nctu.edu.vn/index.php/news/chum-anh-ve-thu-vien-dai-hoc-nam-can-tho" class="text-primary">Chùm ảnh về thư viện đại học Nam Cần Thơ</a><span class="date-newstick"><br><i>Góc ảnh - 10/07/2020</i></span>
                    </div>
                    <div style="border-bottom: 1px solid #ccc;">
                        <a href="http://thuvien.nctu.edu.vn/index.php/news/danh-sach-sinh-vien-tre-han-tra-sach-tinh-den-30062020" class="text-primary">Danh sách sinh viên trễ hạn trả sách tính đến 30/06/2020</a><span class="date-newstick"><br><i>Thông báo - 09/07/2020</i></span>
                    </div>
                    <div style="border-bottom: 1px solid #ccc;">
                        <a href="http://thuvien.nctu.edu.vn/index.php/news/nguoi-ban-hang-gioi-phai-ban-minh-truoc"  class="text-primary">Người Bán Hàng Giỏi Phải Bán Mình Trước</a><span class="date-newstick"><br><i>Giới thiệu sách - 03/07/2020</i></span>
                    </div>
                    <div style="border-bottom: 1px solid #ccc;">
                        <a href="http://thuvien.nctu.edu.vn/index.php/news/100-phuong-phap-truyen-dong-luc-cho-doi-nhom-chien-thang" class="text-primary">100 Phương Pháp Truyền Động Lực Cho Đội Nhóm Chiến Thắng</a><span class="date-newstick"><br><i>Giới thiệu sách - 29/06/2020</i></span>
                    </div>
                </div>
            
                <div class="panel panel-default" id="lienketwebsite">
                    <div class="panel-heading"><span class="glyphicon glyphicon-bullhorn"></span><h5> Liên kết website </h5>
                </div>

                    <div class="panel-body">
                        <div style="border-bottom: 1px solid #ccc;">
                            <a href="http://vilasal.org.vn/" target="_blank">Liên chi hội Thư viện khu vực phía Nam</a>
                        </div>
                        <div style="border-bottom: 1px solid #ccc;">
                            <a href="https://thuvienphapluat.vn/" target="_blank">Trang Thư viện Pháp luật </a>
                        </div>
                        <div style="border-bottom: 1px solid #ccc;">
                            <a href="http://chinhphu.vn/portal/page/portal/chinhphu/trangchu" target="_blank">Cổng thông tin điện tử Chính phủ</a>
                        </div>
                        <div style="border-bottom: 1px solid #ccc;">
                            <a href="http://nlv.gov.vn" target="_blank">Thư viện Quốc Gia Việt Nam</a>
                        </div>
                        <div style="border-bottom: 1px solid #ccc;">
                            <a href="http://www.vla.org.vn/" target="_blank">Hội thư viện Việt Nam</a>
                        </div>
                        <div style="border-bottom: 1px solid #ccc;">
                            <a href="http://www.vjol.info" target="_blank">Tạp chí khoa học Việt Nam Trực tuyến</a>
                        </div>
                        <div style="border-bottom: 1px solid #ccc;">
                            <a href="http://repository.vnu.edu.vn/" target="_blank">Thư viện Đại học Quốc Gia Hà Nội</a>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default" id="gioithieusach">
                    <a href="http://thuvien.nctu.edu.vn/index.php/topic/7">
                        <div class="panel-heading"><span class="glyphicon glyphicon-bullhorn"></span><h5> Giới thiệu sách </h5>
                        </div>
                    </a>
                    
                    <div class="panel-body">
                        <div id="slides" class="carousel slide" data-ride="carousel">
                            <ul class="carousel-indicators">
                                <li data-target="#slides" data-slide-to="0" class="active"></li>

                                <li data-target="#slides" data-slide-to="1"></li>

                                <li data-target="#slides" data-slide-to="2"></li>

                                <li data-target="#slides" data-slide-to="3"></li>
                            </ul>

                            <div class="carousel-inner" style="margin-left: 55px;">
                                <div class="carousel-item active">
                                    <a href="http://thuvien.nctu.edu.vn/index.php/news/viet-nam-non-song-gam-voc-mien-bac-trung-nam">
                                        <img style='width:50%; height:50%;' src="http://thuvien.nctu.edu.vn/upload/vnnsgvbia1.jpg" class="owlC1">
                                    </a>
                                </div>

                                <div class="carousel-item">
                                    <a href="http://thuvien.nctu.edu.vn/index.php/news/viet-nam-non-song-gam-voc-mien-bac-trung-nam">
                                        <img style='width:50%; height:50%;' src="http://thuvien.nctu.edu.vn/upload/opac-image15.png" class="owlC1">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="http://thuvien.nctu.edu.vn/index.php/news/viet-nam-non-song-gam-voc-mien-bac-trung-nam">
                                        <img style='width:50%; height:50%;' src="http://thuvien.nctu.edu.vn/upload/opac-image15.png" class="owlC1">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="http://thuvien.nctu.edu.vn/index.php/news/viet-nam-non-song-gam-voc-mien-bac-trung-nam">
                                        <img style='width:50%; height:50%;' src="http://thuvien.nctu.edu.vn/upload/opac-image15.png" class="owlC1">
                                    </a>
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#slides" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>

                            <a class="carousel-control-next" href="#slides" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default" id="video">
                    <div class="panel-heading"><span class="glyphicon glyphicon-bullhorn"></span><h5> Video </h5>
                    </div>

                    <div class="panel-body">
                        <iframe width="100%" height="130" src="https://www.youtube.com/embed/zg1S-2vNg20?start=213" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-1"></div>
</div>
@endsection


