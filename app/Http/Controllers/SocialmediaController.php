<?php

namespace App\Http\Controllers;

use App\Models\Socialmedia;
use Illuminate\Http\Request;

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
    public function create()
    {
        $data=new Image;
        $data->image=Storage::putFile('images',$request->file('image')); //File Uploading
        $data->title=$request->input('title');
        $data->news_id=$id;

        $data->save();
        return redirect()->route("admin_image_create",['id'=>$id]);
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
    public function edit(Socialmedia $socialmedia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Socialmedia  $socialmedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Socialmedia $socialmedia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Socialmedia  $socialmedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Socialmedia $socialmedia)
    {
        //
    }
}
