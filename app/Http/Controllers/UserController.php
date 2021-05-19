<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
USE App\Models\User;

class UserController extends Controller
{
    function login(Request $req){

        $user = User::where(['email'=>$req->email])->first();

        if(!$user || !Hash::check($req->password, $user->password)) {

            return "Username Or Password Does Not Match";
        }
        else{

            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
}