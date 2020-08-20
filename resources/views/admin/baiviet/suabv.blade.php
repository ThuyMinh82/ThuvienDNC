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
                        <td id='bold2'>Alias bài viết:</td>
                        <div class="from-group">
                            <input class="form-control" name="alias" placeholder="Nhập alias bài viết ..." value="{{$baiviet->alias}}"/>
                        </div>
                        <td id='bold2'>Chọn chủ đề:</td>
                        <div class="from-group">
                            <select class="form-control" name="chudebv" id="select-user" >
                               <!--  <option value="">---------------Chọn chủ đề------------</option> -->
                                @foreach($chudebv as $cd)
                                <option 

                                @if($cd->id == $baiviet->chudebv->id)

                                {{"selected"}}

                                @endif

                                value="{{$cd->id}}">{{$cd->ten_cd}}
                                
                                </option>

                                @endforeach
                            </select>
                        </div>
                        <td id='bold'>Ảnh đại diện:</td>
                        <div class="from-group">
                            <a href="{{$baiviet->anhdaidien}}"><img style='width:80px; height:60px float:right;' src="{{$baiviet->anhdaidien}}"></a>
                            <input id="ckfinder-input-1" name="anhdaidien" class="form-control" type="text" value="{{$baiviet->anhdaidien}}" style='width:81%;'>
                            <a style='float:right; margin-top:-38.25px;' class="btn btn-success" id="ckfinder-popup-1">Chọn ảnh khác</a>
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
<script type="text/javascript" src="{{asset('/ckfinder/ckfinder.js')}}"></script>
<script>
    var button1 = document.getElementById( 'ckfinder-popup-1' );

    button1.onclick = function() {
        selectFileWithCKFinder( 'ckfinder-input-1' );
    };

    function selectFileWithCKFinder( elementId ) {
        CKFinder.popup( {
            chooseFiles: true,
            width: 800,
            height: 600,
            onInit: function( finder ) {
                finder.on( 'files:choose', function( evt ) {
                    var file = evt.data.files.first();
                    var output = document.getElementById( elementId );
                    output.value = file.getUrl();
                } );

                finder.on( 'file:choose:resizedImage', function( evt ) {
                    var output = document.getElementById( elementId );
                    output.value = evt.data.resizedUrl;
                } );
            }
        } );
    }
</script>
@endsection
