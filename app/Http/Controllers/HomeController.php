<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Settings;
use App\Models\Socialmedia;

class HomeController extends Controller
{
    public function index(){
        $data=Settings::first(); /* ilk satır gelir. */
        $socialmedia=Socialmedia::all();
        return view('home.index',['page'=>'index','data'=>$data,'socialmedia'=>$socialmedia]); /* home'daki index anlamına gelir */
    }

    public static function categorylist(){
        return Category::where('parent_id','=',0)->with('children')->get();
    }



  
}
