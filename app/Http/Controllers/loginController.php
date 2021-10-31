<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\admin;

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

    //Update
    // Admin Login

    function adminlogin()
    {
        return view('pages.admin.login');
    }

    public function adminloginConfirm(Request $req){
        $admin = admin::where('email',$req->email)
                  ->where('password',$req->password)
                  ->first();

        if($admin){
            session()->put('adminId',$admin->id);
            session()->put('admin',$admin->name);
            session()->put('adminEmail',$admin->email);
            return redirect()->route('adminDash');
        }
        return redirect()->route('admin')->with('err2', 'These credentials do not match our records');

    }
    //////////
    
    public function logout(){
        session()->flush();
        return redirect()->route('home');
    }
    public function Alogout(){
        session()->flush();
        return redirect()->route('admin');
    }
}
