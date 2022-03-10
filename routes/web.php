<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
/* Controllers */
use App\HTTP\Controllers\HomeController;
use App\HTTP\Controllers\EkonomiController;
use App\HTTP\Controllers\GundemController;
use App\HTTP\Controllers\AdminController;
use App\HTTP\Controllers\CategoryController;



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

/* Admin */
Route::get('/admin',[AdminController::class,'index'])->name('admin_home')->middleware('auth');
Route::get('/login',[AdminController::class,'login'])->name('login');
Route::post('/admin/logincheck',[AdminController::class,'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout',[AdminController::class,'logout'])->name('admin_logout');

/* Admin->category with auth! */
Route::middleware('auth')->prefix('admin/category')->group(function(){
    /* prefix asagidakilerin hepsinin önüne eklenir. admin/category/add,admin/category/delet etc. */
    Route::get('/',[CategoryController::class,'index'])->name('admin_category');
    Route::get('/add',[CategoryController::class,'add'])->name('admin_category_add');
    Route::get('/update',[CategoryController::class,'update'])->name('admin_category_update');
    Route::get('/delete',[CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('/show',[CategoryController::class,'show'])->name('admin_category_show');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
