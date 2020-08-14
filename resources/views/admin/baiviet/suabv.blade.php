@extends('pages.page')

@section('header')
<title>Sửa bài viết</title>
@endsection

@section('content')
<div class="row no-gutters">
    <div class="col-md-1"></div>
    <div class="col-md-10 col-sm-12 padding-0">
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
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h1>Sửa bài viết</h1>
                    <form action="admin/baiviet/suabv/{{$baiviet->id}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <td id='bold2'>Tên bài viết:</td>
                        <div class="from-group">
                        <input class="form-control" name="ten_bv" placeholder="Nhập tên bài viết ..." value="{{$baiviet->ten_bv}}"/>
                        </div>
                        <td id='bold2'>Chọn chủ đề:</td>
                        <div class="from-group">
                            <select class="form-control" name="chudebv" id="select-user" >
                               <!--  <option value="">---------------Chọn chủ đề------------</option> -->
                                @foreach($chudebv as $cd)
                                <option 

                                @if($cd->id == $baiviet->chudebv->cd_id)

                                {{"selected"}}

                                @endif

                                value="{{$cd->id}}">{{$cd->ten_cd}}
                                
                                </option>

                                @endforeach
                        </div>
                        <td id='bold'>Mô tả ngắn</td>
                        <div class="from-group">
                            <td><textarea class="ckeditor" name="mtngan_bv" id="" cols="80" rows="5">
                            {{$baiviet->mtngan_bv}}
                            </textarea></td>
                        </div>
                       <td id='bold'>Nội dung bài viết</td>
                        <div class="from-group">
                            <td><textarea class="ckeditor" name="noidung_bv" id="" cols="80" rows="5">
                            {{$baiviet->noidung_bv}}
                            </textarea></td>
                        </div>
                        <button type="submit" class="btn btn-primary center" style="margin-top: 30px;">Sửa</button>
                    </form>
                </div>
            <div class="col-md-2"></div>
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>
<br>
@endsection
