@extends('pages.page')

@section('header')
<title>Trang chủ Admin</title>
@endsection

@section('content')
<div class="row no-gutters">
    <div class="col-md-1"></div>
    <div class="col-md-10 col-sm-12 padding-0">
        <div class="alert alert-success alert-dismissible">
            <h5>Xin chào 
                <?php
                $username = Session::get('username');
                if($username){
                    echo $username;                                    
                }
                ?>
            , bạn đã đăng nhập thành công!</h5>
        </div>
          </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-1"></div> 
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection()

