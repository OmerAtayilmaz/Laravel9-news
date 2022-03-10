<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
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
  
             return redirect()->intended('admin/dashboard');
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
