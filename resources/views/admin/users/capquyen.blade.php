@extends('pages.page')

@section('header')
<title>Cấp quyền</title>
@endsection

@section('content')
<div class="row no-gutters">
    <div class="col-md-3"></div>
    <div class="col-md-6 col-sm-12 padding-0">
        <h4>Cấp quyền tài khoản</h4>     
        <form action="admin/users/capquyen{{$users->id}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>  
        <table class="table table-hover">
            <tbody>
            <tr>
                <td id='bold3'>Tài khoản:</td>
                <td>$users->id</td>
            </tr>
            <tr>
                <td id='bold3'>Quyền:</td>
                <div class="from-group">
                            <select class="form-control" name="phanquyen" id="select-user" >
                               <!--  <option value="">---------------Chọn chủ đề------------</option> -->
                                @foreach($phanquyen as $pq)
                                <option 

                                @if($pq->id == $phanquyen->usergroup->usergroup_id)

                                {{"selected"}}

                                @endif

                                value="{{$pq->id}}">{{$pq->tenpq}}
                                
                                </option>

                                @endforeach
                            </select>
                        </div>
            </tr>
            </tbody>
        </table>
        </form>
    </div>
    <div class="col-md-3"></div> 
</div>
<button type="button" class="btn btn-primary center">Lưu    </button>
@endsection