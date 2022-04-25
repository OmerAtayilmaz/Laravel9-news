<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $datalist=News::all();
        $users=DB::table('users')->get();
        return view('admin.admin_news',['news'=>$datalist,'users'=>$users]);  /* home'daki index anlamına gelir */
     }
    public function add(){
        $categories = Category::with('children')->get();
        return view('admin.admin_new_create',['categories' => $categories]);
    }
    public function create(Request $request)
    {
        $title=$request->input('title');
        $category_id=$request->input('category_id');
        $keywords=$request->input('keywords');
        $type=$request->input('type');
        $slug=$request->input('slug');
        $image=$request->input('image');
        $user_id=Auth::id();
        $status=$request->input('status');
        $detail=$request->input('detail');
        $description=$request->input('description');
        $image=Storage::putFile('images',$request->file('image')); //File Uploading
    
     
        DB::table('news')->insert([
            'title' => $title,
            'category_id' => $category_id,
            'keywords' => $keywords,
            'type'=>$type,
            'slug'=>$slug,
            'user_id' => $user_id,
            'description' => $description,
            'detail'=>$detail,
            'status'=>$status,
            'image'=>$image
        ]); 

       return redirect(route('admin_news'));
    }

    public function update(Request $request, News $news,$id)
    {   
        $data = News::find($id);
        $data->title=$request->input('title');
        $data->keywords=$request->input('keywords');
        $data->category_id=$request->input('category_id');
        $data->slug=$request->input('slug');
        $data->type=$request->input('type');
        $data->status=$request->input('status');
        $data->description=$request->input('description');
        $data->detail=$request->input('detail');
        $data->image=Storage::putFile('images',$request->file('image')); //File Uploading

        $data->save();
        return redirect(route('admin_news'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
  

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
    public function destroy(News $news,$id)
    {
        $deleted = DB::table('news')->where('id',"=", $id)->delete();
        return redirect(route('admin_news'));
    }
}
