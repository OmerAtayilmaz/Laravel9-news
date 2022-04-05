<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=News::all();
        $categories=DB::table('categories')->get()->where('category_id',0);
        $users=DB::table('users')->get();
        return view('admin.admin_news',['news'=>$datalist,'categories'=>$categories,'users'=>$users]);  /* home'daki index anlamına gelir */
     }
    public function add(){
        $categories=DB::table('categories')->get()->where('parent_id',0);
        return view('admin.admin_new_create',['categories' => $categories]);
    }
    public function create(Request $request)
    {
        $title=$request->input('title');
        $category_id=$request->input('category_id');
        $keywords=$request->input('keywords');
        $type=$request->input('type');
        $image=$request->input('image');
        $user_id=Auth::id();
        $status=$request->input('status');
        $detail=$request->input('detail');
        $description=$request->input('description');
    
     
        DB::table('news')->insert([
            'title' => $title,
            'category_id' => $category_id,
            'keywords' => $keywords,
            'type'=>$type,
            'user_id' => $user_id,
            'description' => $description,
            'detail'=>$detail,
            'status'=>$status,
        ]); 

       return redirect(route('admin_news'));
    }
    public function update(Request $request, News $news)
    {   
        $data=News::find($id);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news,$id)
    {
         // $category=DB::table('categories')->get()->where('id',$id);
         $currentNews=News::find($id);
         $news=DB::table('news')->get()->where('id',$id);
         $categories=DB::table('categories')->get()->where('category_id',0);

         return view('admin.admin_news_edit',['news' => $news,'currentNews'=>$currentNews,'categories'=>$categories]);
    }

  
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
