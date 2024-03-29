<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Settings;
use App\Models\Socialmedia;
use App\Models\Image;
use App\Models\Message;
use App\Models\News;
use App\Models\Comment;
use App\Models\Faq;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Auth;
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
        $imageList=Image::where('news_id',$id)->get();
        $comments=Comment::where('news_id',$id)->get();
        $commentCount=Comment::where('news_id',$id)->count();
        $commentAverage=Comment::where('news_id',$id)->average('rate');
        
         return view('home.new-detail',[
            'new'=>$new,
            'comments'=>$comments,
            'commentCount'=>$commentCount,
            'commentAverage'=>$commentAverage,
            'imageList'=>$imageList,
        ]); 
    }
    public function category($id,$slug){
        $data=News::where('category_id',$id)->get();
         return view('home.category',['news'=>$data]);
    }
    /* Search */
    public function getnews(Request $request){
        
        $search=$request->input('search');

        $count=News::where('title','like','%'.$search.'%')->get()->count();
        if($count==1)
        {
            $data=News::where('title',$request->input('search'))->first();
            return redirect()->route('news',['id'=>$data->id,'slug'=>$data->slug]);
        }else{
            return redirect()->route('newslist',['search'=>$search]);
        }
    }
    public function newslist($search){
            $datalist=News::where('title','like','%'.$search.'%')->get();
            return view('home.search_news',['search'=>$search,'news'=>$datalist]);
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

    public function faq(){
        $faq=Faq::all()->sortBy('position');
        return view('home.faq',['faq'=>$faq]);
    }
    public function panels(){
        return view('home.auth');
    }


    #Author CRUD Operations
    public function authornews(){
        $authorNews=News::where('user_id',Auth::id())->get();
        return view('home.author.index',['authorNews'=>$authorNews]);
    }

    public function author_addnews(){
        $categories=Category::all();
        return view('home.author.add',[
            'categories'=>$categories
        ]);
    }
    public function author_createnews(Request $request){
        $data =new News;
        $data->title=$request->input('title');
        $data->keywords=$request->input('keywords');
        $data->category_id=$request->input('category_id');
        $data->slug=$request->input('slug');
        $data->type=$request->input('type');
        $data->user_id=Auth::id();
        $data->status=$request->input('status');
        $data->description=$request->input('description');
        $data->detail=$request->input('detail');
        $data->image=Storage::putFile('images',$request->file('image')); //File Uploading
        $data->save();
        return redirect(route('home'));  
    }

    public function author_editnews($id){
        $new=News::find($id);
        $categories=Category::all();
        return view('home.author.edit',['currentNews'=>$new,'categories'=>$categories]);
    }
    public function author_updatenews(Request $request,$id){
        $data =News::find($id);
        $data->title=$request->input('title');
        $data->keywords=$request->input('keywords');
        $data->category_id=$request->input('category_id');
        $data->slug=$request->input('slug');
        $data->type=$request->input('type');
        $data->user_id=Auth::id();
        $data->status=$request->input('status');
        $data->description=$request->input('description');
        $data->detail=$request->input('detail');
        if($request->file('image')){
            $data->image=Storage::putFile('images',$request->file('image')); //File Uploading
        }
        $data->save();
        return redirect(route('author.news'));  
    }

    public function author_deletenews($id){
        $data=News::find($id);
        $data->delete();
        return redirect(route('author.news')); 
    }
}
