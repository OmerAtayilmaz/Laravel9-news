<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
/* Controllers */
use App\HTTP\Controllers\HomeController;
use App\HTTP\Controllers\EkonomiController;
use App\HTTP\Controllers\GundemController;



/* Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
 */
Route::get('/',[HomeController::class,"index"])->name('home');
/* bir parametre aldığında calisir */
Route::get('/blog',function(){
    return view('home.blog');
});

Route::get('/magazine',function(){
    return view('home.magazine');
});
Route::get('/contact',function(){
    return view('home.contact');
});
Route::get('/ekonomi/{id}',[EkonomiController::class,"test"])->name('ekonomi')->where('id','[0-9]+');
Route::redirect('/home',"/",301);/* "/home" yazarsa "/" gider */
Route::get('/video',function(){
    return view('home.video',["mydata"=>"Ömer Atayilmaz"]);
})->name('video');

Route::get('/gundem/{uridata}',[GundemController::class,"index"])->name('gundem');

Route::get('/dunya',function(){
    return Inertia::render('VideoPage',[
        'canLogn'=>Route::has('login'),
        'canRegister'=>Route::has('register'),
        'laravelVersion'=>Application::VERSION,
        'phpVersion'=>PHP_VERSION,
    ]);
})->name('dunya');
Route::get('/spor',function(){
    return Inertia::render('VideoPage',[
        'canLogn'=>Route::has('login'),
        'canRegister'=>Route::has('register'),
        'laravelVersion'=>Application::VERSION,
        'phpVersion'=>PHP_VERSION,
    ]);
});
Route::get('/canli',function(){
    return Inertia::render('VideoPage',[
        'canLogn'=>Route::has('login'),
        'canRegister'=>Route::has('register'),
        'laravelVersion'=>Application::VERSION,
        'phpVersion'=>PHP_VERSION,
    ]);
});
Route::get('/iletisim',function(){
    return Inertia::render('VideoPage',[
        'canLogn'=>Route::has('login'),
        'canRegister'=>Route::has('register'),
        'laravelVersion'=>Application::VERSION,
        'phpVersion'=>PHP_VERSION,
    ]);
});
Route::get('/hakkimizda',function(){
    return Inertia::render('VideoPage',[
        'canLogn'=>Route::has('login'),
        'canRegister'=>Route::has('register'),
        'laravelVersion'=>Application::VERSION,
        'phpVersion'=>PHP_VERSION,
    ]);
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
