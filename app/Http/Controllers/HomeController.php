<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Settings;

class HomeController extends Controller
{
    public function index(){
        $data=Settings::first(); /* ilk satır gelir. */
        return view('home.index',['page'=>'index','data'=>$data]); /* home'daki index anlamına gelir */
    }

    public static function categorylist(){
        return Category::where('parent_id','=',0)->with('children')->get();
    }



  
}
