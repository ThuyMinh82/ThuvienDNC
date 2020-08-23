<div class="col-md-4 col-md-pull-4 col-sm-4 col-xl-3" id="bodyright">
    <div class="panel-group">
                <div class="panel panel-default" id="tinmoinhat">
                    <a href="tintuc.html">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-bullhorn"></span><h5> Tin mới nhất </h5>
                        </div>
                    </a>

                    <div class="panel-body">
                        @foreach($baiviet1 as $bv)
                        <div style="border-bottom: 1px solid #ccc;">
                            <a href="xembaiviet/{{$bv->id}}"  class="text-primary" style="font-size: 14px; overflow: hidden; display:-webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp:2; margin-bottom: -30px;">{{$bv->ten_bv}}</a><span class="date-newstick"><br><i>{{$bv->chudebv->ten_cd}} - {{$bv->created_at}}</i></span>
                        </div>
                        @endforeach
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

                                <div class="carousel-inner" style="margin-left: 95px;">
                                    <div class="carousel-item active">
                                        <a href="http://thuvien.nctu.edu.vn/index.php/news/viet-nam-non-song-gam-voc-mien-bac-trung-nam">
                                            <img style='width:40%; height:40%;' src="http://thuvien.nctu.edu.vn/upload/vnnsgvbia1.jpg" class="owlC1">
                                        </a>
                                    </div>

                                    <div class="carousel-item">
                                        <a href="http://thuvien.nctu.edu.vn/index.php/news/viet-nam-non-song-gam-voc-mien-bac-trung-nam">
                                            <img style='width:40%; height:40%;' src="http://thuvien.nctu.edu.vn/upload/opac-image15.png" class="owlC1">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="http://thuvien.nctu.edu.vn/index.php/news/viet-nam-non-song-gam-voc-mien-bac-trung-nam">
                                            <img style='width:40%; height:40%;' src="http://thuvien.nctu.edu.vn/upload/opac-image15.png" class="owlC1">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="http://thuvien.nctu.edu.vn/index.php/news/viet-nam-non-song-gam-voc-mien-bac-trung-nam">
                                            <img style='width:40%; height:40%;' src="http://thuvien.nctu.edu.vn/upload/opac-image15.png" class="owlC1">
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