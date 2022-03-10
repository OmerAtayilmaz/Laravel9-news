<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EkonomiController extends Controller
{
    public function index(){
        return View('home.ekonomi');
    }
    public function test($id){
        return View('home.ekonomi',["id"=>$id]);
    }
}