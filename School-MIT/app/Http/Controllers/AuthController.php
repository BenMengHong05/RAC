<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\TryCatch;

class AuthController extends Controller
{
    //
    public function login(){
        return view('login.index');
    }
    function loginPost(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $credentials = $request->only("email", "password");
        if(Auth::attempt($credentials)){
            return redirect()->route('index');
        }
        return redirect(route("login"))->with("error", "login failed please try again ");
    }
    public function register(){
        return view('register.index');
    }
    function registerPost(Request $request){
        $request->validate([
            'username'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
        ]);
        $user = new User();
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password =  Hash::make($request->password);
        if($user->save()){
            return redirect(route("login"))->with("success" , "user created successfully");
        }
        return redirect(route("register"))->with("error","Failed to create account");

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
