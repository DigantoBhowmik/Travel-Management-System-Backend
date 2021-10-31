<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\User;
use App\Models\Package;

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
