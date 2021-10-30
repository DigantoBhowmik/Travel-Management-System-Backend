<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Session;
class adminsController extends Controller
{   
    public function __construct(){
            $this->middleware('ValidAdmin');
         }
    public function Create(){
        return view('pages.admin.create');
    }
    public function createSubmit(Request $request){
        $var = new admin();
        $this->validate(
            $request,
            [
                'name'=>'required|min:3|max:20',
                'id'=>'required',
                'password'=>'required|between:6,15',
                'cpassword'=>'required|same:password',
                'email'=>'required|email|max:255|unique:users,email',
                'email'=>'required|string|email|max:255|unique:users,email',
                'phone'=>'required|min:11|max:11|regex:/^([0-9\s\-\+\(\)]*)$/'
            ],
            [
                'name.required'=>'Please put your name',
                'id.required'=>'Your id should be a number',
                'id.max'=>'ID must be a single number',
               
                'email.required'=>'Please put your email',
                'email.unique'=>'your email should be unique',
                
                'password.required'=>'Please put your password',
                'password.between'=>'your password should contain atleast 6 characters',
                'cpassword.required'=>'your password should match',
                'phone.required'=>'Please put your name',

                'name.min'=>'Name must be greater than 2 charcters'
            ]
        );

        
        $var->name= $request->name;
        $var->id = $request->id;
        $var->email = $request->email;
        $var->phone=$request->phone;
        $var->password=$request->password;
        $var->save();
        Session::flash('msg','Data Added Succesfully');
            
        //  return redirect()->route('admins.list');
        // return redirect()->back();
        return redirect()->back();
        
    }



    function list(Request $request)
    {
        // $admins = admin::all();
        // return view('pages.admin.list')->with('admins',$admins);
        $search=$request['search'] ?? "";
        if( $search != "")
        {
            $admins = admin::where('name','LIKE',"%$search%")->orwhere('email','LIKE',"%$search%")->get();
        }
        else {
            $admins = admin::all();
        }
        return view('pages.admin.list')
        ->with('search',$search)
        ->with('admins', $admins);
    }
    public function edit(Request $request){
        $id = $request->id;
        $admin = admin::where('id',$id)->first();
        return view('pages.admin.edit')->with('admin',$admin);

    }

    public function editSubmit(Request $request){

       
        $this->validate(
            $request,
            [
                'name'=>'required|min:3|max:20',
                'id'=>'required',
                'password'=>'required|between:6,15',
                'cpassword'=>'required|same:password',
                'email'=>'required|email|max:255|unique:users,email',
                'phone'=>'required|min:11|max:11|regex:/^([0-9\s\-\+\(\)]*)$/'
            ],
            [
                'name.required'=>'Please put your name',
                'id.required'=>'Your id should be a number',
                'id.max'=>'ID must be a single number',
               
                'email.required'=>'Please put your email',
                'email.unique'=>'your email should be unique',
                
                'password.required'=>'Please put your password',
                'password.between'=>'your password should contain atleast 6 characters',
                'cpassword.required'=>'your password should match',
                'phone.required'=>'Please put your name',

                'name.min'=>'Name must be greater than 2 charcters'
            ]
        );



        $var = admin::where('id',$request->id)->first();
        $var->name= $request->name;
        $var->id = $request->id;
        $var->email = $request->email;
        $var->phone=$request->phone;
        $var->password=$request->password;
        $var->save();
        return redirect()->route('admins.list');

    }

    public function delete(Request $request){
        $var = admin::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('admins.list');

    }
}
