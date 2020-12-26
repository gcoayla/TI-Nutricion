<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function login(Request $req)
    {

         $user= User::where(['email'=>$req->email])->first();
         if(!$user ||  !Hash::check($req->password,$user->password))
         {
             return ["Result"=>"no loged"];
            //return redirect('/');
         }
         else
         {
             $req->session()->put('users',$user);
             return ["Result"=>"loged"];
             //return redirect('/');
         }

    }



    function register(Request $req)
    {
        $user= new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->edad=$req->edad;
        $user->peso=$req->peso;
        $user->altura=$req->altura;
        //$user->password=Hash::make($req->password);

        $result=$user->save();

        if($result){
            return ["Result"=>"data guardada"];
            //return redirect("/login");
        }
        else
        {
            return ["Result"=>"opercaio fallida"];
            //return redirect("/login");
        }

    }
}
