<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\admin;

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
                'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'password'=>'required|between:6,12',
                'Confirm_Password'=>'required|same:password'
            ],
            
            );
        
        $user -> name = $req->name;
        $user -> email = $req->email;
        $user -> phone = $req->phone;
        $user -> role = $req->role;
        $user -> password = $req->password;
        $user->save();

        session()->put('user',$user->name);
        session()->put('role',$user->role);
        session()->put('userId',$user->id);
        return redirect(route('editprofile'));
    }


    ///////////////////////////////-----AdminMyProfileHasnat-------//////////////////////////////


    public function admineditProfile()
    {
        $admin =admin::where('id',Session()->get('adminId'))->first();
        return view('pages.admin.admineditprofile')->with('admin',$admin);
    }
    public function adminupdateData(Request $req)
    {
        $admin =admin::where('id',Session()->get('adminId'))->first();
        $this->validate(
            $req,
            [
                'name'=>'required|min:4|max:50',
                'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'password'=>'required|between:3,12',
                'Confirm_Password'=>'required|same:password'
            ],
            
            );
        
        $admin -> name = $req->name;
        $admin -> email = $req->email;
        $admin -> phone = $req->phone;
        $admin -> password = $req->password;
        $admin->save();

        session()->put('admin',$admin->name);
        session()->put('adminId',$admin->id);
        return redirect(route('admineditprofile'));
    }
    
}
