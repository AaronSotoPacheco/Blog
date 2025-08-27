<?php

use Illuminate\Support\Facades\Route;
//ENDPOINT 
Route::get('/', function () {
    return view('welcome');
});
Route::get("/contacto",function(){
    return view('contacto');
    
});
Route::get("/post",function(){
    return view('post');
    
});
Route::get("/about",function(){
    return view('about');
    
});



