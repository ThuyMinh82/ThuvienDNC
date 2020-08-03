@extends('admin.layout.page')

@section('header')
<title>Cấp quyền</title>
@endsection

@section('content')
<div class="row no-gutters">
    <div class="col-md-3"></div>
    <div class="col-md-6 col-sm-12 padding-0">
        <h4>CẤP QUYỀN TÀI KHOẢN</h4>       
        <table class="table table-hover">
            <tbody>
            <tr>
                <td id='bold3'>Tài khoản:</td>
                <td>
                    <select multiple class="form-control" id="select-user">
                    <option>Admin2</option>
                    <option>Admin3</option>
                    <option>User1</option>
                    <option>User2</option>
                    <option>User3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td id='bold3'>Quyền:</td>
                <td>
                    <select class="form-control" id="usergroup">
                    <option>Quyền Admin</option>
                    <option>Quyền User</option>>
                    </select>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-3"></div> 
</div>
<button type="button" class="btn btn-primary center">Gán</button>
@endsection