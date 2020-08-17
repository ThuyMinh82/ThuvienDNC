@extends('pages.page')

@section('header')
<title>Sửa chủ đề</title>
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
                <div class="col-md-6"><h1>Sửa chủ đề</h1>
                    <form action="admin/chudebv/suachude/{{$chudebv->id}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="from-group">
                        <h6>Tên chủ đề:</h6>
                        <input class="form-control" name="ten_cd" placeholder="Nhập tên chủ đề ..." value="{{$chudebv->ten_cd}}"/>
                        <h6>Alias chủ đề:</h6>
                        <input class="form-control" name="alias" placeholder="Nhập alias ..." value="{{$chudebv->alias}}"/>
                        </div>
                        <button type="submit" class="btn btn-primary center"style="margin-top: 30px;">Sửa
                        </button>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
@endsection

