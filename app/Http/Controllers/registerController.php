<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class registerController extends Controller
{
    function register()
    {
        return view('pages.user.register');
    }
    public function registration(Request $req)
    {
        $user = new user;
        $user -> name = $req->name;
        $user -> email = $req->email;
        $user -> phone = $req->phone;
        $user -> password = $req->password;
        $user->save();

        session()->put('user',$user->name);
        session()->put('userId',$user->id);
        return redirect(route('home'));
    }
}
