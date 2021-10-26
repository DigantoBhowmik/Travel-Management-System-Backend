<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Package;

class packageController extends Controller
{
    //
    function packagelist()
    {
        $packages = package::all();
        return view('pages.package.packages')->with('packages',$packages);
    }

}
