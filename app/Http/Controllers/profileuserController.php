<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profileuser;
use App\users;
class profileuserController extends Controller
{
    //
     public function getIndex()
    {
        $profileuser= profileuser::all();
        return view('admin.profileuser.prouser',['profileuser'=>$profileuser]);
    }
}
