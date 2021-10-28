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

    public function createpackage(Request $req)
    {
        $packages = new package;
        $this->validate(
            $req,
            [
                'name'=>'required|min:4|max:50',
                'email'=>'required|string|email|max:255|unique:users,email,'.$packages->id,
                'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'password'=>'required|between:6,12',
                'cpassword'=>'required|same:password'

            ],
            
            );
        
        $packages -> name = $req->name;
        $packages -> email = $req->email;
        $packages -> phone = $req->phone;
        $packages -> password = $req->password;
        return redirect(route('pages.package.packges'));
    }

}
