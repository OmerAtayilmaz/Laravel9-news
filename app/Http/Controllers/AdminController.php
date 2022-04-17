<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $news=DB::table('news')->get();
        /* where role='author' */
        $authors=DB::table('users')->get();

        /* where role='user' */
        $users=DB::table('users')->get();
        return view('admin.dashboard',['news'=>$news,'authors'=>$authors,'users'=>$users]);
        exit();
     }
    public function login(){
        return view('admin.login');
        exit();
     }


     public function logincheck(Request $request)
     {
         $credentials = $request->validate([
             'email' => ['required', 'email'],
             'password' => ['required'],
         ]);
  
         if (Auth::attempt($credentials)) {
             $request->session()->regenerate();
             return redirect()->intended('home');
         }
  
         return back()->withErrors([
             'email' => 'The provided credentials do not match our records.',
         ]);
     }
     public function logout(Request $request)
     {
         Auth::logout();
      
         $request->session()->invalidate();
      
         $request->session()->regenerateToken();
      
         return redirect('/');
     }
    
}
