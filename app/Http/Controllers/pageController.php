<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    function home()
    {
        return view('pages.home');
    }
    function login()
    {
        return view('pages.user.login');
    }
    function register()
    {
        return view('pages.user.register');
    }
}
