@extends('pages.page')

@section('header')
<title>Thêm bài viết</title>
@endsection

@section('content')
<div class="row no-gutters">
    <div class="col-md-3"></div>
    <div class="col-md-6 col-sm-12 padding-0">
            <!--/.col-lg-12-->
        <div style="padding-bottom: 120px">
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach
                </div>
            @endif

            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
            <div class="row no-gutters">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h1>Thêm bài viết</h1>
                    <form action="admin/baiviet/thembv" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <td id='bold2'>Tên bài viết:</td>
                        <div class="from-group">
                        <input class="form-control" name="ten_bv" placeholder="Nhập tên bài viết ..." />
                        </div>
                        <td id='bold2'>Chọn chủ đề:</td>
                        <div class="from-group">
                            <select class="form-control" name="chudebv" id="select-user">
                            @foreach($chudebv as $cd)
                            <option value="{{$cd->id}}">{{$cd->ten_cd}}</option>
                            @endforeach
                            </select>
                        </div>
                        <td id='bold'>Mô tả ngắn</td>
                        <div class="from-group">
                            <td><textarea class="ckeditor" name="mtngan_bv" id="" cols="80" rows="5"></textarea>
                        </td></div>
                       <td id='bold'>Nội dung bài viết</td>
                        <div class="from-group">
                            <td><textarea class="ckeditor" name="noidung_bv" id="" cols="80" rows="5"></textarea></td>
                        </div>
                        <button type="submit" class="btn btn-primary center" style="margin-top: 30px;">Thêm</button>
                    </form>
                </div>
            <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</div>
<br>
@endsection