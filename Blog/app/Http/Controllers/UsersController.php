<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function getUsers(){
        /*Select * from users*/
        $data =User::all();
       // dd($data);
       return view("admin.users")->with('usuarios',$data);
    }
    public function createUsers(){
        dd("si jalo");
    }

}
