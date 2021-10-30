<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    function home()
    {
        return view('pages.home');
    }
    public function adminDash(){
        return view('pages.admin.adminDash');

    }

    
    
}
