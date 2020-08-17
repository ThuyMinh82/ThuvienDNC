@extends('pages.page')

@section('header')
<title>Thêm bài viết</title>
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
                        <td id='bold'>Ảnh đại diện:</td>
                        <div class="from-group">
                            <input id="ckfinder-input-1" name="anhdaidien" class="form-control" type="text" style='width:86%;'>
                            <a style='float:right; margin-top:-38.25px;' class="btn btn-success" id="ckfinder-popup-1">Chọn ảnh</a>
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