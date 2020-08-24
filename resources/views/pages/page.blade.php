<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="shortcut icon" type="image/ico" href="{{asset('backend/images/namct.ico')}}"/>
        @yield('header')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" type="text/css" href="{{asset('backend/css/style.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="{{asset('/jquery-1.11.3.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/ckeditor/ckeditor.js')}}" charset="utf-8"></script>
        <base href="{{asset('')}}">
    </head>
    <style>
        .navbar-dark .navbar-nav .nav-link
        {
            color: white;
        }
    </style>
    <body>
    @if(Auth::check())
        <div class="container-fluid">
            <div class="row no-gutters" id="banner">
                <div class="col-xl-1"></div>
                <div class="col-xl-6 col-lg-7 col-md-8 col-sm-12" id ="color">
                    <a href="trangchu"  class="logo"><img src="{{asset('backend/images/logo.png')}}" id="logo"></a>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-4" id = "color">
                    <img src="{{asset('backend/images/block-banner.png')}}" id="logo1">
                </div>
                <div class="col-xl-1"></div>
            </div>
            <div class="row no-gutters">
                <div class="col-xl-1"></div>
                <div class="col-xl-10 col-sm-12 padding-0">
                    @if($ten_pq=='admin')
                    <nav class="navbar navbar-expand-md bg-primary navbar-dark">
                        <!-- Brand -->
                        <a class="navbar-brand" href="/ThuvienDNC/public/trangchu"><i class="fa fa-fw fa-home"></i>Home</a>
                    
                        <!-- Toggler/collapsibe Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                      
                        <!-- Navbar links -->
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        <i class="fa fa-fw fa-user"></i>Tài Khoản
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="admin/users/themtaikhoan">Thêm Tài Khoản</a>
                                        <a class="dropdown-item" href="admin/users/danhsach">Danh sách tài khoản</a>
                                        <a class="dropdown-item" href="admin/users/danhsachdaxoa">Danh sách đã xóa</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        <i class="fa fa-fw fa-pen"></i>Bài Viết
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="admin/baiviet/thembv">Thêm Bài Viết</a>
                                        <a class="dropdown-item" href="admin/baiviet/danhsach">Danh sách Bài Viết</a>
                                        <a class="dropdown-item" href="admin/baiviet/danhsachchuaduyet">Danh sách chưa duyệt</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        <i class="fa fa-fw fa-book"></i>Chủ Đề
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="admin/chudebv/themchude">Thêm Chủ Đề</a>
                                        <a class="dropdown-item" href="admin/chudebv/danhsach">Danh sách chủ đề</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        <i class="fa fa-fw fa-image"></i>Hình Ảnh
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="admin/hinhanh/themhinhanh">Thêm Ảnh</a>
                                        <a class="dropdown-item" href="admin/hinhanh/danhsach">Danh sách hình ảnh</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="/ThuvienDNC/public/home"><img style='width:15px; height:15px; margin-right: 5px; margin-top: -2px;' src="{{asset('backend/images/namct.ico')}}">Thư Viện</a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">{{ Auth::user()->username }}</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="admin/users/doimatkhau/{{ Auth::user()->id }}">Đổi mật khẩu</a>
                                        <a class="dropdown-item" href="admin/profileuser/prouser">Xem thông tin</a>
                                        <a class="dropdown-item" href="logout">Đăng xuất</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    @else
                    <nav class="navbar navbar-expand-md bg-primary navbar-dark">
                        <!-- Brand -->
                        <a class="navbar-brand" href="/ThuvienDNC/public/trangchu"><i class="fa fa-fw fa-home"></i>Home</a>
                    
                        <!-- Toggler/collapsibe Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                      
                        <!-- Navbar links -->
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle disabled" href="#" id="navbardrop" data-toggle="dropdown">
                                        <i class="fa fa-fw fa-user"></i>Tài Khoản
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="admin/users/themtaikhoan">Thêm Tài Khoản</a>
                                        <a class="dropdown-item" href="admin/users/capquyen">Cấp Quyền</a>
                                        <a class="dropdown-item" href="admin/users/danhsach">Danh sách tài khoản</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        <i class="fa fa-fw fa-pen"></i>Bài Viết
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="admin/baiviet/thembv">Thêm Bài Viết</a>
                                        <a class="dropdown-item" href="admin/baiviet/danhsach">Danh sách Bài Viết</a>
                                        <a class="dropdown-item" href="admin/baiviet/danhsachchuaduyet">Danh sách chưa duyệt</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle disabled" href="#" id="navbardrop" data-toggle="dropdown">
                                        <i class="fa fa-fw fa-book"></i>Chủ Đề
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="admin/chudebv/themchude">Thêm Chủ Đề</a>
                                        <a class="dropdown-item" href="admin/chudebv/danhsach">Danh sách chủ đề</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        <i class="fa fa-fw fa-image"></i>Hình Ảnh
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="admin/hinhanh/themhinhanh">Thêm Ảnh</a>
                                        <a class="dropdown-item" href="admin/hinhanh/danhsach">Danh sách hình ảnh</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="/ThuvienDNC/public/home"><img style='width:15px; height:15px; margin-right: 5px; margin-top: -2px;' src="{{asset('backend/images/namct.ico')}}">Thư Viện</a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">{{ Auth::user()->username }}</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="admin/users/doimatkhau/{{ Auth::user()->id }}">Đổi mật khẩu</a>
                                        <a class="dropdown-item" href="admin/profileuser/prouser">Xem thông tin</a>
                                        <a class="dropdown-item" href="logout">Đăng xuất</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    @endif
                </div>
                <div class="col-xl-1"></div>
            </div>
            @yield('content')
        </div>
        <br>
        <br>
        <div class="row no-gutters" style="background: #168bff;">
            <div class="col-xl-1"></div>
            <div class="col-xl-10">
                <div style="padding: 20px;">
                    <footer style="color: white;">
                        <p>
                            <span style="font-weight: bold; font-size: 16px; line-height: 2;">Trường Đại Học Nam Cần Thơ</span> <br>
                            <i class="fa fa-fw fa-map-marker"></i>168, Nguyễn Văn Cừ (nối dài), P. An Bình, Quận Ninh Kiều, Thành phố Cần Thơ. <br>
                            <i class="fa fa-fw fa-phone"></i> Điện thoại: (0292) 3 798 222 - 3 798 668
                        </p>            
                    </footer>  
                    <div class="text-center" style="color: #e2dcdc; font-size: 12px;">COPYRIGHT © 2020 THƯ VIỆN ĐIỆN TỬ ĐẠI HỌC NAM CẦN THƠ. ALL RIGHTS RESERVED.</div>
                </div>
            </div>
            <div class="col-xl-1"></div>
        </div> 
        @yield('js')
        @yield('script')

    @else
    <div class="container-fluid">
            <div class="row no-gutters" id="banner">
                <div class="col-xl-1"></div>
                <div class="col-xl-6 col-lg-7 col-md-8 col-sm-12" id ="color">
                    <a href=""  class="logo"><img src="{{asset('backend/images/logo.png')}}" id="logo"></a>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-4" id = "color">
                    <img src="{{asset('backend/images/block-banner.png')}}" id="logo1">
                </div>
                <div class="col-xl-1"></div>
            </div>
            <div class="row no-gutters">
                <div class="col-xl-1"></div>
                <div class="col-xl-10 col-sm-12 padding-0">
                    <nav class="navbar navbar-expand-md bg-primary navbar-dark">
                        <!-- Brand -->
                        <a class="navbar-brand" href="#"><i class="fas fa-times"></i>404</a>
                    
                        <!-- Toggler/collapsibe Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                      
                        <!-- Navbar links -->
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        <i class="fas fa-times"></i>404
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">404</a>
                                        <a class="dropdown-item" href="#">404</a>
                                        <a class="dropdown-item" href="#">404</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        <i class="fas fa-times"></i>404
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">404</a>
                                        <a class="dropdown-item" href="#">404</a>
                                        <a class="dropdown-item" href="#">404</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        <i class="fas fa-times"></i>404
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">404</a>
                                        <a class="dropdown-item" href="#">404</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        <i class="fas fa-times"></i>404
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">404</a>
                                        <a class="dropdown-item" href="#">404</a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">404</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">404</a>
                                        <a class="dropdown-item" href="#">404</a>
                                        <a class="dropdown-item" href="#">404</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-xl-1"></div>
            </div>
            <div class="row no-gutters">
                <div class="col-xl-3"></div>
                <div class="col-xl-6 col-sm-12 padding-0">
                    <h5 style='text-align: center; '>Bạn cần phải <a href="admin/login">đăng nhập</a> để thực hiện chức năng này</h5>
			        <img style='width:100%; height:100%' src="{{asset('backend/images/404.png')}}" alt="">
                </div>
                <div class="col-xl-3"></div>
            </div>
        </div>
        <br>
        <br>
        <div class="row no-gutters" style="background: #168bff;">
            <div class="col-xl-1"></div>
            <div class="col-xl-10">
                <div style="padding: 20px;">
                    <footer style="color: white;">
                        <p>
                            <span style="font-weight: bold; font-size: 16px; line-height: 2;">Trường Đại Học Nam Cần Thơ</span> <br>
                            <i class="fa fa-fw fa-map-marker"></i>168, Nguyễn Văn Cừ (nối dài), P. An Bình, Quận Ninh Kiều, Thành phố Cần Thơ. <br>
                            <i class="fa fa-fw fa-phone"></i> Điện thoại: (0292) 3 798 222 - 3 798 668
                        </p>            
                    </footer>  
                    <div class="text-center" style="color: #e2dcdc; font-size: 12px;">COPYRIGHT © 2020 THƯ VIỆN ĐIỆN TỬ ĐẠI HỌC NAM CẦN THƠ. ALL RIGHTS RESERVED.</div>
                </div>
            </div>
            <div class="col-xl-1"></div>
        </div>
    @endif
    </body>
</html>
