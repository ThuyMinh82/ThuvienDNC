@extends('giaodien.page')

@section('title')
<title>Tin tức & Sự kiện</title>
@endsection

@section('content')
<div class="row">
    <div class='col-xl-1'></div>
    <div class="col-sm-12 col-md-pull-8 col-sm-8 col-xl-7">
        <div class="row w-main" style="margin-top: 5px">
            @foreach($baiviet as $bv)
            <div class="col-sm-4 img-avatar text-center" style="margin-top: 5px;">
                <a href="xembaiviet/{{$bv->id}}"><img style="width: 190px; height: 120px;" src="{{$bv->anhdaidien}}" id="hinh"></a>
            </div>
            <div class="col-sm-8 w-main-right">
                <div class="main"> 
                    <div class="hidden-xs">
                        <a class="title-ls-news" href="xembaiviet/{{$bv->id}}">{{$bv->ten_bv}}</a>
                    </div>
                    <div class="support-tilte">{{$bv->chudebv->ten_cd}}</div>     
                    <span class='text-mtngan'>{!! $bv->mtngan_bv !!}</span>
                </div>
            </div>
            @endforeach
        </div>
        <div class="duongvien"></div>
        <ul class="pagination justify-content-center">
            {{ $baiviet->links() }}
        </ul>
    </div>
    @include('giaodien.bodyright')
</div>
@endsection
