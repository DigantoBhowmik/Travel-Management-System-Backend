<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\admin;
use App\Models\Package;
use App\Models\Event;
class ApiController extends Controller
{ 
   

    // Admin part
    public function Adminslist()
    {
        $admins = admin::all();
        return $admins;
    }
    public function Adminedit(Request $request)
    {
        $id = $request->id;
        $admin =admin::where('id',$id)->first();
        return $admin;
    }

    // Package part
    public function Packageslist(){
        $packages= Package::all();
        return $packages;
    }
    public function Packageedit(Request $request){
        $id = $request->id;
        $package = Package::where('id',$id)->first();
        return $package;
    }

    //Events Part
    function Eventlist()
    {
        $events = event::all();
        return $events;
    }
    public function Eventsedit(Request $request)
    {
        $id = $request->id;
        $events =event::where('id',$id)->first();
        return $events;
    }

    //Agents List
    function Agentlist()
    {
        $users = User::where('role','LIKE',"agent")->get();
        return $users;
    }
    function Userlist()
    {
        $users = User::where('role','LIKE',"user")->get();
        return $users;
    }

    //Admin Create
    public function AdminCreate(Request $req){
        $var= new admin();
        $var -> name = $req->name;
        $var -> email = $req->email;
        $var -> phone = $req->phone;
        $var -> password = $req->password;
        $var->save();
        return $req;
    }
    public function adminloginConfirm(Request $req){
        $admin = admin::where('email',$req->email)
                  ->where('password',$req->password)
                  ->first();

        if($admin){
            return $admin; 
        }

    }
    public function admineditProfile(Request $req)
    {
        $admin =admin::where('id',$req->id)->first();
        return $admin;
    }
    public function adminupdateData(Request $req)
    {
        $admin =admin::where('id',$req->id)->first();
        
        $admin -> name = $req->name;
        $admin -> email = $req->email;
        $admin -> phone = $req->phone;
        $admin -> password = $req->password;
        $admin->save();
        return $admin;
    }

    public function Userdelete(Request $request){
        $id = $request->id;
        $var =User::where('id',$id)->first();
        $var->delete();

    }


}
