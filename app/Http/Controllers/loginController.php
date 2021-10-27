<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class loginController extends Controller
{
    function login()
    {
        return view('pages.user.login');
    }
    public function loginConfirm(Request $req){
        $check = user::where('email',$req->email)
                  ->where('password',$req->password)
                  ->first();
        if($check){
            session()->put('userId',$check->id);
            session()->put('user',$check->name);
            session()->put('role',$check->role);
            return redirect()->route('home');
        }
        return redirect()->route('login')->with('err', 'These credentials do not match our records');

    }
    
    public function logout(){
        session()->flush();
        return redirect()->route('home');
    }
}
