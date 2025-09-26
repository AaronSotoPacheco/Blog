<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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
    Route::get("/",function(){
        return view('admin.dashboard');
    });
    Route::get("/users",[UsersController::class,'getUsers']);
    Route::post("/users",[UsersController::class,'createUsers']);
       
});


