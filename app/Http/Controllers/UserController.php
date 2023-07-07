<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function register(){
        return view('./auth/register');
    }
    public function inputRegister(Request $request){
        $request->validate([
        'email' => 'required',
        'name' => 'required',
        'password' => 'required'
    ]);    
    User::create([
        'name' => $request->name,
        'email'=> $request->email,
        'password' => Hash::make($request->password),
    ]);
    return redirect('/')->with('successRegister', 'successfully creating account');
    }

    public function index(){
        return view('./auth/login');
    }


    public function auth(Request $request)
    {
        $request->validate([

        'name' => 'required|exists:users,name',
        'password' => 'required'
        ],[
            'name.exists'=>"This user doesn't exists"
        ]);


    $user = $request->only('name', 'password');
    if(Auth::attempt($user)){
        return redirect('/home');
    }else{
        return redirect('/')->with('fail', "Fail To Login");
    }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}

