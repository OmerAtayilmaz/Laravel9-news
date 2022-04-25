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
        $settings=Settings::first(); /* ilk satır gelir. */
        $socialmedia=Socialmedia::all();
        $news=News::orderBy('id', 'DESC')->get();
        $lastestNew=News::select('title','image','created_at','id','slug')->orderBy('id', 'DESC')->get()->first();
        $sliderDataList=News::select('title','image','created_at','id','slug')->orderBy('id', 'DESC')->where('id','!=',(News::get()->last()->id))->limit(4)->get();
        $categoryList=Category::orderBy('title', 'ASC')->get();

        $payload=[
            'page'=>'index',
            'data'=>$settings,
            'socialmedia'=>$socialmedia,
            'news'=>$news,
            'categoryList'=>$categoryList,
            'lastestNew'=>$lastestNew,
            'sliderDataList'=>$sliderDataList
        ];
      return view('home.index',$payload); 
    }

    public function contact(){
        $contact=Settings::first()->contact;
        return view('home.contact',['contact'=>$contact]);
    }

    public function show(Request $request,$id,$slug){
        $new=News::find($id);
        return view('home.new-detail',['new'=>$new]);
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
