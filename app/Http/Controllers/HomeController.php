<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('adminDashboard');
    }

    public function dosen(){
        return view('dosenDashboard');
    }
}
