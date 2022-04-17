<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    protected $appends=['getParentsTree'];
    public static function getParentsTree($category,$title){
        if($category->parent_id==0)
            return $title;
        
        $parent=Category::find($category->parent_id);
        $title=$parent->title.' > '.$title;
        return CategoryController::getParentsTree($parent,$title);
    }

    public function index()
    {
        $categories = Category::with('children')->get();
       return view('admin.admin_category',['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $categories=DB::table('categories')->get();
        return view('admin.admin_category_create',['categories' => $categories]);
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        
        $title=$request->input('title');
        $parent_id=$request->input('parent_id');
        $keywords=$request->input('keywords');
        $slug=$request->input('slug');
        $description=$request->input('description');
    
        DB::table('categories')->insert([
            'title' => $title,
            'parent_id' => $parent_id,
            'keywords' => $keywords,
            'slug' => $slug,
            'description' => $description
        ]);

      return redirect(route('admin_category'));
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
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category,$id)
    {
       // $category=DB::table('categories')->get()->where('id',$id);
        $currentCategory=Category::find($id);
        $categories=Category::with('children')->get();
        return view('admin.admin_category_edit',['categories' => $categories,'currentCategory'=>$currentCategory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Category $category,$id)
    {
        $data = Category::find($id);
        $data->title=$request->input('title');
        $data->parent_id=$request->input('parent_id');
        $data->keywords=$request->input('keywords');
        $data->slug=$request->input('slug');
        $data->description=$request->input('description');
        $data->save();
        return redirect(route('admin_category'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category,$id)
    {
        $deleted = DB::table('categories')->where('id',"=", $id)->delete();
        return redirect(route('admin_category'));

    }
}
