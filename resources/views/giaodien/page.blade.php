<!DOCTYPE html>
<html lang="en">
    <head>
        @yield('title')
        <link rel="shortcut icon" type="image/ico" href="{{asset('backend/images/namct.ico')}}"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <base href="{{asset('')}}">
      
    </head>
    
    <body> 
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-xl-1"></div>
                 <div class="col-xl-6 col-lg-7 col-md-8 col-sm-12" id="color" style="background-color:#D2EDFB; background-image: linear-gradient(#D2EDFB,white);">
                    <a href="" class ="logo"><img style='width:80%' src="{{asset('frontend/images/logo.png')}}" id="logo"></a>
                </div>

                <div class="col-xl-4 col-lg-5 col-md-4 d-none d-sm-block d-sm-none d-md-block" id="color" style="background-color:#D2EDFB; background-image: linear-gradient(#D2EDFB,white);">
                    <img style="margin-left:85px;" src="{{asset('frontend/images/block-banner.png')}}" id="logo1" >
                </div>
                <div class="col-xl-1"></div>
            </div>

            <div class="row no-gutters">
                <div class="col-xl-1"></div>
                <div class="col-xl-10 col-sm-12 padding-0">
                    <nav class="navbar navbar-dark py-0 bg-primary navbar-expand-lg py-md-0" style='font-size: 18px;'>
                        <a class="navbar-brand" href="" ><i class="fa fa-fw fa-home"></i></a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" active href="/ThuvienDNC/public/home" style="color: white">TRANG CHỦ</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"  style="color: white">GIỚI THIỆU</a>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="giaodien/gioithieu">GIỚI THIỆU CHUNG</a>

                                        <a class="dropdown-item" href="https://drive.google.com/file/d/1-qw4tUlxr8L92UNiTLnzOsQMoKe5zR70/view" target="_blank">NỘI QUY - QUY ĐỊNH TV</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"  style="color: white">TÌM KIẾM TÀI LIỆU</a>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="http://thuvien.nctu.edu.vn:8000" target="_blank">SÁCH TRONG THƯ VIỆN</a>

                                        <a class="dropdown-item" href="http://thuvien.nctu.edu.vn:8080/digital" target="_blank">TÀI LIỆU NỘI SINH</a>

                                        <a class="dropdown-item" href="http://nctu.tailieu.vn/" target="_blank">THƯ VIỆN SỐ ( THƯ VIỆN ĐIỆN TỬ )</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"  style="color: white">TIN TỨC</a>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="giaodien/tintuc">TIN TỨC MỚI</a>

                                        <a class="dropdown-item" href="#">SỰ KIỆN TRONG TƯƠNG LAI GẦN</a>

                                        <a class="dropdown-item" href="http://thuvien.nctu.edu.vn/index.php/topic/7" >GIỚI THIỆU SÁCH</a>
                                    </div>
                                </li>    

                                <li class="nav-item">
                                    <a class="nav-link" href="https://drive.google.com/file/d/1BUBjjFkaOJINwtCvNR4p7YPSHqnH0xec/view?usp=sharing" target="_blank"  style="color: white">HƯỚNG DẪN SỬ DỤNG</a>
                                </li> 

                                <li class="nav-item">
                                    <a class="nav-link" href="http://thuvien.nctu.edu.vn:8000/cgi-bin/koha/opac-user.pl" target="_blank"  style="color: white">GIA HẠN SÁCH</a>
                                </li> 

                                <li class="nav-item">
                                    <a class="nav-link" href="giaodien/lienhe"  style="color: white">ĐỊA CHỈ</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-xl-1"></div>
            </div>
            @yield('content')

            @include('giaodien.footder')

    </body>
</html>

