@extends('admin.layout.page')

@section('header')
<title>Thêm chủ đề</title>
@endsection

@section('content')
<div class="row no-gutters">
	<div class="col-md-3"></div>
	<div class="col-md-6 col-sm-12 padding-0">
	    <h4>THÊM CHỦ ĐỀ</h4>       
	    <table class="table table-hover">
	        <tbody>
	        <tr>
	            <td id='bold'>Tên chủ đề:</td>
	            <td><input class="form-control" id="focusedInput" type="text"></td>
	        </tr>
	        </tbody>
	    </table>
	</div>
	<div class="col-md-3"></div> 
</div>
<button type="button" class="btn btn-primary center">Thêm</button>
<br>
<br>
<br>
<br>
@endsection()