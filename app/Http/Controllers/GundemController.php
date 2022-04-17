<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GundemController extends Controller
{
    public function index($uridata){
        return View('home.gundem',['uridata'=>$uridata,'gundemdata'=>'burası gündem sayfası verisidir']);
    }
}
