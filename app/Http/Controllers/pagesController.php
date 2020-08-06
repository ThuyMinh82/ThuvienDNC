<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class pagesController extends Controller
{
    //
    function index(){
    	return view('pages.index');

    }
}
