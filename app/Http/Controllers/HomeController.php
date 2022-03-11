<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index',['page'=>'index']); /* home'daki index anlamına gelir */
    }



  
}
