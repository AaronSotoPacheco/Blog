<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;
Route::get('/', function () {
    return view('welcome');
});
Route::get("/contact",function(){
    return view('contacto');
});
Route::get("/post",function(){
    return view('post');
});
Route::get("/about",function(){
    return view('about');
});
Route::group(['prefix'=>'dashboard'],function(){
    Route::resource('/',DashboardController::class);
    Route::resource('/',PostsController::class);
    Route::get('/posts/actions/add', [PostsController :: class, 'showAdd']);
    Route::get("/users",[UsersController::class,'getUsers']);
    Route::post("/users",[UsersController::class,'createUsers']);
       
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
