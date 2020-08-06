@extends('admin.layout.page')

@section('header')
<title>Thêm chủ đề</title>
@endsection

@section('content')

<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Thêm chủ đề
					<small>Thêm</small>
				</h1>
			</div>
			<!--/.col-lg-12-->
	        <div class="col-lg-7" style="padding-bottom: 120px">
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

		        <form action="admin/chudebv/themchude" method="POST">
		        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
		        <div class="from-group">
		        <label>Tên chủ đề</label>
		        	<input class="form-control" name="ten_cd" placeholder="Nhập tên chủ đề ..." />
		        </div>
		        	<button type="submit" class="btn btn-default">Thêm
		            </button>
	            </form>
	        </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
@endsection

