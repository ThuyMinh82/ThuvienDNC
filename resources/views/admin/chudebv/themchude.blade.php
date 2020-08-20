
@extends('pages.page')

@section('header')
<title>Thêm chủ đề</title>
@endsection

@section('content')
@if($ten_pq=='admin')
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
					<h1>Thêm chủ đề</h1>
					
			        <form action="admin/chudebv/themchude" method="POST">
			        	<input type="hidden" name="_token" value="{{csrf_token()}}"/>
			        	<div class="from-group">
			        	<input class="form-control" name="ten_cd" placeholder="Nhập tên chủ đề ..." />
			        	</div>
			        	<button type="submit" class="btn btn-primary center" style="margin-top: 30px;">Thêm</button>
		            </form>
        		</div>
            <div class="col-md-3"></div>
        	</div>
    	</div>
	</div>
</div>
@else
<div class="row no-gutters">
    <div class="col-xl-3"></div>
    <div class="col-xl-6 col-sm-12 padding-0">
        <h5 style='text-align: center; '>Bạn phải là admin để thực hiện chức năng này</h5>
        <img style='width:100%; height:100%' src="{{asset('backend/images/404.png')}}" alt="">
    </div>
    <div class="col-xl-3"></div>
</div>
@endif
<br>
<br>
<br>

@endsection


