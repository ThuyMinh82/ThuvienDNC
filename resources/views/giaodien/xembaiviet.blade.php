@extends('giaodien.page')

@section('title')
<title>Giới thiệu</title>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-1"></div>
    <div class="col-sm-8 col-md-pull-8 col-xl-7">
        <div style="margin-top: 7px;">
	        <div id="main-container-text" class="col-md-12">
            <style>
                .support-tilte {
                    font-size: 12px;
                    font-weight: bold;
                    color: #907a7a;
                    margin-top: 3px;
                    text-transform: uppercase;
                    text-indent: 7px;
                }
            </style>
            <div style="margin-top: 7px; border: 1px solid #cccccc;">
                <div class="support-tilte">Chuyên mục: {{$baiviet->chudebv->ten_cd}} - {{$baiviet->created_at}}</div>
                <div style="padding: 14px;">
                    <h1 style="text-align:center"><span style="font-size:28px"><span style="color:#3498db">{{$baiviet->ten_bv}}</span></span></h1>
                    <p>&nbsp;</p>
                    {!! $baiviet->mtngan_bv !!}
                    {!! $baiviet->noidung_bv !!}
	            </div>
            </div>	
        </div>
        @if($baiviet->status == '0')
            <a class="btn btn-primary center" href="admin/baiviet/duyetbv/{{$baiviet->id}}" style="margin-top: 30px;">Duyệt</a>
        @endif
        <br>
    </div>
    <div class="col-md-1"></div>
</div>
    @include('giaodien.bodyright')
</div>
@endsection

