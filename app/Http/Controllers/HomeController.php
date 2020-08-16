<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index(){
    	return view('giaodien.index');

    }
    function gioithieu(){
    	return view('giaodien.gioithieu');

    }
    function tintuc(){
    	return view('giaodien.tintuc');

    }
    function lienhe(){
    	return view('giaodien.lienhe');

    }
   
}
