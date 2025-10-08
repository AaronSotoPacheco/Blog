<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UsersController extends Controller
{
    public function __construct(Type $var = null) {
       $this->middleware('auth');
    }
    public function getUsers(){
        /*Select * from users*/
        $data =User::all();
       // dd($data);
       return view("admin.users")->with('usuarios',$data);
    }
    public function createUsers(Request $request){
        //dd($request->email);

        //reglas de validacion
        $request->validate([
            "name"=> 'required|min:3',
            "username" => 'required|min:3|unique:users,username',
            "email"=> "required|email|unique:users,email",
            "password" => 'required|min:5',
            "password2" => 'required|min:5|same:password'

        ]);
        //Guardar Registro
        $user = new User();
        $user->name=$request->name;
        $user->username=$request->username;
        $user->password=Hash::make($request->password);
        $user->email=$request->email;
        $user->img="default.jpg";
        $user->save();
        //dd("Inserccion correcta");
        return redirect()->back()->with('success', "Usuario Insertado correctamente");




    }

}
