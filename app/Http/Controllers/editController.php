<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class editController extends Controller
{
    public function editProfile()
    {
        $user=user::where('id',Session()->get('userId'))->first();
        return view('pages.user.editProfile')->with('user',$user);
    }
    public function updateData(Request $req)
    {
        $user =user::where('id',Session()->get('userId'))->first();
        $this->validate(
            $req,
            [
                'name'=>'required|min:4|max:50',
                'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
            ],
            
            );
        
        $user -> name = $req->name;
        $user -> email = $req->email;
        $user -> phone = $req->phone;
        $user -> role = $req->role;
        $user -> password = $req->password;
        $user->save();

        session()->put('user',$user->name);
        return redirect(route('editprofile'));
    }
}
