@extends('pages.page')

@section('header')
<title>Sửa hình ảnh</title>
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
			<h1 style="text-align:center;">Sửa Hình Ảnh</h1>
			<form action="admin/hinhanh/suahinhanh/{{$hinhanh->id}}" method="POST">
			    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
			    <div class="from-group">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td colspan='2'>
                                    <input class="form-control" name="ten_anh" placeholder="Nhập tên ảnh ..." value="{{$hinhanh->ten_anh}}" />
                                </td>
                            </tr>
                            <tr>
                                <td style='width: 76%;'>
                                    <input id="ckfinder-input-1" name="link_anh" class="form-control" type="text" value="{{$hinhanh->link_anh}}"/>
                                </td>
                                <td>
                                    <a class="btn btn-success" id="ckfinder-popup-1">Chọn ảnh mới</a>
                                </td>
                            </tr>
                            <tr>
                            <th style="text-align:right;">Ảnh hiện tại:</th>
                            <td>
                                <a href="{{$hinhanh->link_anh}}"> <img style='width:80px; height:60px' src="{{$hinhanh->link_anh}}"></a>
                            </td>
                            </tr>
                        </tbody>
                    </table>
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
			    </div>
			    <button type="submit" class="btn btn-primary center" style="margin-top: 30px;">Sửa</button>
            </form>
        </div>
    </div>
    <div class="col-md-3"></div>
        
</div>
<br>
@endsection()