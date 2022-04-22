<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Settings;
use App\Models\Socialmedia;
use App\Models\Message;
use App\Models\News;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(){
        $data=Settings::first(); /* ilk satır gelir. */
        $socialmedia=Socialmedia::all();
        $news=News::orderBy('id', 'DESC')->get();
        $lastestNew=News::orderBy('id', 'DESC')->get()->first();
        $lastFour=News::orderBy('id', 'DESC')->where('id','!=',(News::get()->last()->id))->limit(4)->get();
        $categoryList=Category::orderBy('title', 'ASC')->get();

      return view('home.index',[
            'page'=>'index',
            'data'=>$data,
            'socialmedia'=>$socialmedia,
            'news'=>$news,
            'categoryList'=>$categoryList,
            'lastestNew'=>$lastestNew,
            'lastFour'=>$lastFour,
        ]);  /* home'daki index anlamına gelir */
    }

    public function contact(){
        $contact=Settings::first()->contact;
        return view('home.contact',['contact'=>$contact]);
    }
    /* Contact Us Message */
    public function message(Request $request){
        $data=new Message();
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->ip=request()->ip();
        $data->save();
        return redirect(route('contact_us'))->with('success','Your message has been sent gracefully!');
    }
    public function about(){
        $about=Settings::first()->aboutus;
        return view('home.about',['about'=>$about]);
    }
    public function references(){
        $references=Settings::first()->references;
        $references;
        return view('home.references',['references'=>$references]);
    }
    public static function categorylist(){
        return Category::where('parent_id','=',0)->with('children')->get();
    }

    public function panels(){
        return view('home.auth');
    }

    
}
