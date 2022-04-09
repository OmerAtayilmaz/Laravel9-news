<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    public function index(){
        return view('home.index',['page'=>'index']); /* home'daki index anlamına gelir */
    }

    public static function categorylist(){
        return Category::where('parent_id','=',0)->with('children')->get();
    }



  
}
