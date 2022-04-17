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
use App\HTTP\Controllers\NewsController;
use App\HTTP\Controllers\SettingsController;
use App\HTTP\Controllers\ImageController;
use App\HTTP\Controllers\SocialmediaController;


Route::get('/',[HomeController::class,"index"])->name('home');
/* bir parametre aldığında calisir */ 
Route::get('/blog',function(){
    return view('home.blog',['page'=>'blog']);
});
Route::get('/magazine',function(){
    return view('home.magazine',['page'=>'magazine']);
});
Route::get('/contact',function(){
    return view('home.contact',['page'=>'contact']);
});
Route::get('/ekonomi/{id}',[EkonomiController::class,"test"])->name('ekonomi')->where('id','[0-9]+');
Route::redirect('/home',"/",301);/* "/home" yazarsa "/" gider */
Route::get('/video',function(){
    return view('home.video',["mydata"=>"Ömer Atayilmaz"]);
})->name('video');

Route::get('/gundem/{uridata}',[GundemController::class,"index"])->name('gundem');

Route::get('/login',function(){
    echo "Hello world!";
});

/* Admin */
Route::get('/admin',[AdminController::class,'index'])->name('admin_home')->middleware('auth');
Route::get('/login',[AdminController::class,'login'])->name('login');
Route::post('/admin/logincheck',[AdminController::class,'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout',[AdminController::class,'logout'])->name('admin_logout');

/* Admin->category with auth! */
Route::middleware('auth')->prefix('admin')->group(function(){
    /* prefix asagidakilerin hepsinin önüne eklenir. admin/category/add,admin/category/delet etc. */

    /* Categories */
    Route::get('category/',[CategoryController::class,'index'])->name('admin_category');
    Route::get('category/add',[CategoryController::class,'add'])->name('admin_category_add');
    Route::post('category/create',[CategoryController::class,'create'])->name('admin_category_create');;
    Route::post('category/update/{id}',[CategoryController::class,'update'])->name('admin_category_update');
    Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('admin_category_edit');
    Route::get('category/delete/{id}',[CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('category/show',[CategoryController::class,'show'])->name('admin_category_show');

    /* NEWS */
    Route::prefix('news')->group(function(){/* admin.news.admin_news * yeni videoları izle * */
        Route::get('/',[NewsController::class,'index'])->name('admin_news');
        /* forwarding to add page */
        Route::get('/add',[NewsController::class,'add'])->name('admin_news_add');
        Route::post('/create',[NewsController::class,'create'])->name('admin_news_create');
        Route::post('/update/{id}',[NewsController::class,'update'])->name('admin_news_update');
        Route::get('/edit/{id}',[NewsController::class,'edit'])->name('admin_news_edit');
        Route::get('/delete/{id}',[NewsController::class,'destroy'])->name('admin_news_delete');
    });
    #Image Image Gallery
    Route::prefix('images')->group(function(){
        Route::get('create/{id}',[ImageController::class,'create'])->name('admin_image_create');
        Route::post('store/{id}',[ImageController::class,'store'])->name('admin_images_store');
        Route::get('delete/{id}/{news_id}',[ImageController::class,'destroy'])->name('admin_image_delete');
        Route::get('show',[ImageController::class,'show'])->name('show');
    });

    #Settings
    Route::prefix('settings')->group(function(){
        Route::get('/',[SettingsController::class,'index'])->name('admin_settings');
        Route::post('/update',[SettingsController::class,'update'])->name('admin_settings_update');
    });
    #SocialMedia
    Route::prefix('social')->group(function(){
        Route::get('/',[SocialmediaController::class,'index'])->name('socialmedia');
        Route::post('/create',[SocialmediaController::class,'create'])->name('admin_socialmedia_create');
        Route::post('/update',[SocialmediaController::class,'update'])->name('admin_socialmedia_update');
    });
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
