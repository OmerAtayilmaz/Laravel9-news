<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

use Inertia\Inertia;
/* Controllers */
use App\HTTP\Controllers\HomeController;
use App\HTTP\Controllers\EkonomiController;
use App\HTTP\Controllers\GundemController;
use App\HTTP\Controllers\AdminController;
use App\HTTP\Controllers\Admin\EmailController;
use App\HTTP\Controllers\CategoryController;
use App\HTTP\Controllers\NewsController;
use App\HTTP\Controllers\SettingsController;
use App\HTTP\Controllers\ImageController;
use App\HTTP\Controllers\UserController;
use App\HTTP\Controllers\MessageController;
use App\HTTP\Controllers\SocialmediaController;
use App\HTTP\Controllers\CommentController;
use App\HTTP\Controllers\FaqController;
use App\HTTP\Controllers\Admin\UserController as Admin_UserController;

/* Home */
Route::get('/',[HomeController::class,"index"])->name('home');
Route::get('/test/{id}',[HomeController::class,"test"])->name('test');
Route::get('/news/{id}/{slug}',[HomeController::class,"show"])->name('news');
Route::get('/category/{id}/{slug}',[HomeController::class,"category"])->name('news_category');
Route::post('/getnews',[HomeController::class,"getnews"])->name('getnews');
Route::get('/newslist/{search}',[HomeController::class,"newslist"])->name('newslist');
Route::get('/auth',[HomeController::class,"panels"])->name('auth');
Route::redirect('/home','/');
Route::get('/contactus',[HomeController::class,"contact"])->name('contact_us');
Route::get('/aboutus',[HomeController::class,"about"])->name('about_us');
Route::get('/references',[HomeController::class,"references"])->name('references');
Route::post('/contactmessage',[HomeController::class,"message"])->name('contactus_message');
Route::post('/sendemail',[EmailController::class,"store"])->name('subscribe_emails');
Route::get('/faq',[HomeController::class,"faq"])->name('home_faq');

/* If Logged İn */
Route::middleware('auth')->group(function(){
    Route::get('/myprofile',[UserController::class,'index'])->name('profile');
    Route::get('/mycomments',[UserController::class,'comments'])->name('comments');
    Route::get('/mycomments/{id}',[UserController::class,'destroycomment'])->name('user_comment_delete');
});
/* Admin */

Route::get('/login',[AdminController::class,'login'])->name('login');
Route::post('/admin/logincheck',[AdminController::class,'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout',[AdminController::class,'logout'])->name('admin_logout');

/* Admin->category with auth! */
Route::middleware('auth')->middleware('admin')->prefix('admin')->group(function(){
    
    Route::get('/',[AdminController::class,'index'])->name('admin_home');
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
    #Contact Messages
    Route::prefix('messages')->group(function(){
        Route::get('/',[MessageController::class,'index'])->name('admin_messages');
        Route::get('/edit/{id}',[MessageController::class,'edit'])->name('admin_message_edit');
        Route::post('/update/{id}',[MessageController::class,'update'])->name('admin_message_update');
        Route::get('delete/{id}',[MessageController::class,'destroy'])->name('admin_message_delete');
        Route::get('show',[MessageController::class,'show'])->name('admin_message_show');
    });
    #Comments
    Route::prefix('comment')->group(function(){
        Route::get('/',[CommentController::class,'index'])->name('admin_comments');
        Route::get('/edit/{id}',[CommentController::class,'edit'])->name('admin_comment_edit');
        Route::post('/update/{id}',[CommentController::class,'update'])->name('admin_comment_update');
        Route::get('delete/{id}',[CommentController::class,'destroy'])->name('admin_comment_delete');
        Route::get('show',[CommentController::class,'show'])->name('admin_comment_show');
    });
    #Faq
    Route::prefix('faq')->group(function(){
        Route::get('/',[FaqController::class,'index'])->name('admin_faq');
        Route::get('create',[FaqController::class,'create'])->name('admin_faq_create');
        Route::post('store',[FaqController::class,'store'])->name('admin_faq_store');
        Route::get('edit/{id}',[FaqController::class,'edit'])->name('admin_faq_edit');
        Route::post('update/{id}',[FaqController::class,'update'])->name('admin_faq_update');
        Route::get('delete/{id}',[FaqController::class,'destroy'])->name('admin_faq_delete');
        Route::get('show',[FaqController::class,'show'])->name('admin_faq_show');
    });

    #Users
    Route::prefix('user')->group(function (){
        Route::get('/',[Admin_UserController::class,'index'])->name('admin_user');
        Route::post('/create',[Admin_UserController::class,'create'])->name('admin_user_create');
        Route::post('/store',[Admin_UserController::class,'store'])->name('admin_user_store');
        Route::get('/edit/{id}',[Admin_UserController::class,'edit'])->name('admin_user_edit');
        Route::post('/update/{id}',[Admin_UserController::class,'update'])->name('admin_user_update');
        Route::post('/delete/{id}',[Admin_UserController::class,'delete'])->name('admin_user_delete');
        Route::get('/userrole/{id}',[Admin_UserController::class,'user_roles'])->name('admin_user_roles');
        Route::post('/userrolestore/{id}',[Admin_UserController::class,'user_role_store'])->name('admin_user_role_add');
        Route::get('/userroledelete/{userid}/{roleid}',[Admin_UserController::class,'user_role_delete'])->name('admin_user_role_delete');
        Route::get('show/{id}',[Admin_UserController::class,'show'])->name('admin_user_show');
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
