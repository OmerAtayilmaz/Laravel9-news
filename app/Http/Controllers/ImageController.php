<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
    
    public function create($id)
    {
        $data=News::find($id);
        $gallery=DB::table('images')->where('news_id','=',$id)->get();
        return view('admin.admin_image_create',[
            'data'=>$data,
            'gallery'=>$gallery
        ]);
    }

    public function store(Request $request,$id)
    {
        $data=new Image;
        $data->image=Storage::putFile('images',$request->file('image')); //File Uploading
        $data->title=$request->input('title');
        $data->news_id=$id;

        $data->save();
        return redirect()->route("admin_image_create",['id'=>$id]);
    }
    public function show(Image $image)
    {
        //
    }
     
    public function destroy(Image $image,$id,$news_id)
    {
        $data = Image::find($id);
        $data->delete();
        return redirect(route('admin_image_create',['id'=>$news_id])); 
     }
}
