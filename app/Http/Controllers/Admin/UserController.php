<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userlist=User::all();
        return view('admin.user',['userlist'=>$userlist]);
    }

    public function user_roles(User $user,$id){
        $user=User::find($id);
        $rolelist=Role::all()->sortBy('name');
        return view('admin.user_roles',['user'=>$user,'rolelist'=>$rolelist]);
    }
    
    public function user_role_store(Request $request,User $user,$id){
        $user=User::find($id);
        $roleid=$request->input('roleid');
        $user->roles()->attach($roleid); #MANY TO MANY ilişkisine veri ekler
        #roles isimli tabloya roleid'ye göre veri ekleme yapar.
        return redirect()->back()->with('success','Role added from user');
    }
    public function user_role_delete(Request $request, $userid,$roleid){
       
        $user=User::find($userid);
        $user->roles()->detach($roleid);#MANY TO MANY ilişkisine veri siler
        return redirect()->back()->with('success','Role deleted from user');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user,$id)
    {
        $user=User::find($id);
        return view('admin.user_show',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user,$id)
    {
       
        $data=User::find($id);
        return view('admin.user_edit',['user'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user,$id)
    {
        $data=User::find($id);
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->adress=$request->input('adress');

        if($request->file('image')!=null){
            $data->profile_photo_path=Storage::putFile('profile-photos',$request->file('image'));
        }
        $data->save();
        return redirect()->route('admin_user')->with('success', 'User information updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
