<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //front
    public function index(){
        return view('pages.index');
    }
    
    
    // admin
    public function dashboard(){
        return view('pages.admin.dashboard');
    }
    public function transactions(){
        return view('pages.admin.transactions');
    }
    public function products(){
        return view('pages.admin.products');
    }
    public function plantcare(){
        return view('pages.admin.plantcare');
    }
    public function users(){
        return view('pages.admin.users');
    }
}
