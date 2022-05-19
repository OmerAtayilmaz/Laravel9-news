<?php

namespace App\Http\Controllers;

use App\Models\Socialmedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SocialmediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $data=Socialmedia::all();
        return view('admin.admin_socialmedia',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $data=new Socialmedia;
        $data->image=Storage::putFile('images',$request->file('image')); //File Uploading
        $data->name=$request->input('name');
        $data->title=$request->input('title');
        $data->description=$request->input('description');
        $data->save();
        return redirect(route("socialmedia"));
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
     * @param  \App\Models\Socialmedia  $socialmedia
     * @return \Illuminate\Http\Response
     */
    public function show(Socialmedia $socialmedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Socialmedia  $socialmedia
     * @return \Illuminate\Http\Response
     */
    public function edit(Socialmedia $socialmedia,$id)
    {
        $data=Socialmedia::find($id);
        return view('admin.socialmedia_edit',[
            'data'=>$data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Socialmedia  $socialmedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Socialmedia $socialmedia,$id)
    {
        $data=Socialmedia::find($id);
        if($request->file('image')){
            $data->image=Storage::putFile('images',$request->file('image')); //File Uploading
        }
        $data->name=$request->input('name');
        $data->title=$request->input('title');
        $data->description=$request->input('description');
        $data->save();
        return redirect(route("socialmedia"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Socialmedia  $socialmedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Socialmedia $socialmedia,$id)
    {
         $data=Socialmedia::find($id);
         $data->delete();
         return redirect(route("socialmedia"))->with('success',"Deleted gracefully!");

    }
}
