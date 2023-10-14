<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //front
    public function index(){
        return view('pages.index');
    }
}
