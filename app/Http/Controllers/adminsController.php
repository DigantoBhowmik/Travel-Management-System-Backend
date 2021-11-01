<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\User;
use App\Models\Package;
use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Session;
class adminsController extends Controller
{   
    public function __construct(){
            $this->middleware('ValidAdmin');
         }


///////////////////////-----------------------Admin Crud-------------------------/////////////////////////
    public function Create(){
        return view('pages.admin.create');
    }
    public function createSubmit(Request $request){
        $var = new admin;
        $this->validate(
            $request,
            [
                'name'=>'required|min:3|max:20',
                'password'=>'required|between:6,15',
                'cpassword'=>'required|same:password',
                'email'=>'required|email|max:255|unique:users,email',
                'email'=>'required|string|email|max:255|unique:users,email,'.$var->id,
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
        $var->email = $request->email;
        $var->phone=$request->phone;
        $var->password=$request->password;
        $var->save();
        // session()::flash('msg','Data Added Succesfully');
        session()->put('admin',$var->name);
        session()->put('adminId',$var->id);
        return redirect(route('admins.list'));
        
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
        $var->email = $request->email;
        $var->phone=$request->phone;
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





/////////////////////////////////////////--------Userlist------------//////////////////////////////////////////
    //User Functions
    function Userlist(Request $request)
    {
        $users = User::where('role','LIKE',"user")->get();
        return view('pages.admin.userlist')
        ->with('users', $users);
    }

    public function Useredit(Request $request){
        $id = $request->id;
        $user = User::where('id',$id)->first();
        
        return view('pages.admin.useredit')->with('user',$user);
    }

    public function UsereditSubmit(Request $request){

       
        $this->validate(
            $request,
            [
                'name'=>'required|min:3|max:20',
                'id'=>'required',
                'password'=>'required|between:6,15',
                'cpassword'=>'required|same:password',
                'email'=>'required|email|max:255',
                'phone'=>'required|min:11|max:11|regex:/^([0-9\s\-\+\(\)]*)$/'
            ],
            [
                'name.required'=>'Please put your name',
                'id.required'=>'Your id should be a number',
                'id.max'=>'ID must be a single number',
               
                'email.required'=>'Please put your email',
                
                
                'password.required'=>'Please put your password',
                'password.between'=>'your password should contain atleast 6 characters',
                'cpassword.required'=>'your password should match',
                'phone.required'=>'Please put your name',

                'name.min'=>'Name must be greater than 2 charcters'
            ]
        );
        $var = User::where('id',$request->id)->first();
        $var->name= $request->name;
        $var->id = $request->id;
        $var->email = $request->email;
        $var->phone=$request->phone;
        $var->password=$request->password;
        $var->role=$request->role;
        $var->save();
        return redirect()->route('admins.Userlist');
    }

    public function Userdelete(Request $request){
        $var = User::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('admins.Userlist');
    }
    public function orderlist(Request $req)
    {
        $event = DB::table('order_events')
            ->leftJoin('events','order_events.eventId','=' , 'events.id')
            ->select('order_events.id', 'events.name','events.price','events.startdate','events.enddate')
            ->where('order_events.userId',$req->id)->get();
        $package = DB::table('order_packages')
            ->leftJoin('packages','order_packages.packageId','=' , 'packages.id')
            ->select('order_packages.id', 'packages.name','packages.price','order_packages.date')
            ->where('order_packages.userId',$req->id)->get();
        // return $event;
        return view('pages.admin.package.orderlist',['events'=>$event,'packages'=>$package,'name'=>$req->name]);
    }

////////////////////////////////////////////-------Agentlist------///////////////////////////////////////////////


    //Agents Funtions
    function Agentlist(Request $request)
    {
        $users = User::where('role','LIKE',"agent")->get();
        return view('pages.admin.agentlist')
        ->with('users', $users);
    }

    public function Agentedit(Request $request){
        $id = $request->id;
        $user = User::where('id',$id)->first();
        
        return view('pages.admin.agent.agentedit')->with('user',$user);
    }

    public function AgenteditSubmit(Request $request){

       
        $this->validate(
            $request,
            [
                'name'=>'required|min:3|max:20',
                'id'=>'required',
                'password'=>'required|between:6,15',
                'cpassword'=>'required|same:password',
                'email'=>'required|email|max:255',
                'phone'=>'required|min:11|max:11|regex:/^([0-9\s\-\+\(\)]*)$/'
            ],
            [
                'name.required'=>'Please put your name',
                'id.required'=>'Your id should be a number',
                'id.max'=>'ID must be a single number',
                'email.required'=>'Please put your email',
                'password.required'=>'Please put your password',
                'password.between'=>'your password should contain atleast 6 characters',
                'cpassword.required'=>'your password should match',
                'phone.required'=>'Please put your name',

                'name.min'=>'Name must be greater than 2 charcters'
            ]
        );
        $var = User::where('id',$request->id)->first();
        $var->name= $request->name;
        $var->id = $request->id;
        $var->email = $request->email;
        $var->phone=$request->phone;
        $var->password=$request->password;
        $var->role=$request->role;
        $var->save();
        return redirect()->route('admins.Agentlist');
    }

    public function Agentdelete(Request $request){
        $var = User::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('admins.Agentlist');
    }








///////////////////////////////////////------------Packagelist---------////////////////////////////////////////
    //Packages
    function Packagelist(Request $request)
    {
       // $admins = admin::all();
        // return view('pages.admin.list')->with('admins',$admins);
        $Packages = Package::all();
        return view('pages.admin.package.packagelist')
        ->with('Packages', $Packages);
    }
    public function Packageedit(Request $request){
        $id = $request->id;
        $package = Package::where('id',$id)->first();
        
        return view('pages.admin.package.packageedit')->with('package',$package);
    }
    
          public function PackageeditSubmit(Request $request){

       
            $this->validate(
                $request,
                [
                    'name'=>'required|min:3|max:20',
                    'agentname'=>'required|min:3|max:20',
                    'id'=>'required',
                    'price'=>'required',
                    'shortdesc'=>'required',
                    'desc'=>'required'
                    
                ],
                [
                    'name.required'=>'Please put your name',
                    'agentname.required'=>'Please put your Agent name',
                    'id.required'=>'Your id should be a number',
                    'id.max'=>'ID must be a single number',
                    'price.required'=>'Please put your price',
                    'shortdesc.required'=>'Please give Short Description',
                   
                    'desc.required'=>'Please give  Description',
                    'phone.required'=>'Please put your name',
    
                    'name.min'=>'Name must be greater than 2 charcters'
                ]
            );
            $var = Package::where('id',$request->id)->first();
            $var->name= $request->name;
            $var->id = $request->id;
            $var->price = $request->price;
            $var->shortdesc=$request->shortdesc;
            $var->desc=$request->desc;
            $var->agentname=$request->agentname;
            $var->startingdate=$request->startingdate;
            $var->enddate=$request->enddate;
            $var->bookingdeadline=$request->bookingdeadline;
           
            $var->save();
            return redirect()->route('admins.packagelist');
        }
    


    public function Packagedelete(Request $request){
        $var = Package::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('admins.packagelist');
    }

    public function item(Request $req){
        $id= $req->id;
        $packages= package::where('id',$id)->get();
        $events= event::where('id',$id)->get();
        return view('pages.admin.package.list',['packages'=>$packages,'events'=>$events,'name'=>$req->name]);
    }






}