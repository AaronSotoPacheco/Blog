<?php

use Illuminate\Support\Facades\Route;
//ENDPOINTS
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
Route::get("/dashboard",function(){
    return view('admin.dashboard');
});
