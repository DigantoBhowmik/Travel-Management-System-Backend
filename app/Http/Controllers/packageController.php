<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Package;
use App\Models\order;

class packageController extends Controller
{
    //
    public function package(Request $req)
    {
        
        $packages=Package::where('agentId',$req->id)->get();
        
        //return view('pages.agent.createpackages')->with('packages',$packages);
        return $packages;
    }

    function packagelist()
    {
        $packages = package::all();
        //return view('pages.package.packages')->with('packages',$packages);
        return $packages;
    }

    public function createpackages(Request $req)
    {
        $packages = new package;
        $this->validate(
            $req,
            [
                'name'=>'required|min:4|max:50'.$packages->id,
                'price'=>'required',
                'shortdesc'=>'required',
                'desc'=>'required',
                'agentname'=>'required',

            ],
            
            );
        
        $packages -> name = $req->name;
        $packages -> price = $req->price;
        $packages -> shortdesc = $req->shortdesc;
        $packages -> desc = $req->desc;
        $packages -> image = $req->image;
        $packages -> agentId = $req->agentname;
        $packages->save();
        //return back()->with('message','Your Package Added');
        return $packages;
    }

    public function packdetails(Request $req)
    {
        $id= $req->id;
        $packages= package::where('id',$id)->first();
        //return view('pages.package.packdetails')->with('packages',$packages);
        return $packages;
    }
    public function delete(Request $request)
    {
        $package = package::where('id',$request->id)->first();
        $package->delete();
        //return redirect(route('createpackages'));
        return $package;
    }
    public function editPackage(Request $request)
    {
        $id= $request->id;
        $package= package::where('id',$id)->first();
        //return view('pages.agent.editpackage')->with('package',$package);
        return $package;
    }
    public function updatePackage(Request $req)
    {
        $id= $req->id;
        $packages = package::where('id',$id)->first();
        $this->validate(
            $req,
            [
                'name'=>'required|min:4|max:50'.$packages->id,
                'price'=>'required',
                'shortdesc'=>'required',
                'desc'=>'required',
                'agentname'=>'required'

            ],
            
            );
        
        $packages -> name = $req->name;
        $packages -> price = $req->price;
        $packages -> shortdesc = $req->shortdesc;
        $packages -> desc = $req->desc;
        $packages -> image = $req->image;
        $packages -> agentId = $req->agentname;
        $packages->save();
        //return redirect(route('createpackages'));
        return $packages;
    }
    public function whoBooked(Request $request)
    {
        $id= $request->id;
        $package = DB::table('order_packages')
            ->leftJoin('users','order_packages.userId','=' , 'users.id')
            ->select('order_packages.id', 'users.name','users.email','users.phone')
            ->where('order_packages.packageId',$id)->get();
        //return view('pages.agent.bookpackage')->with('packages',$package);
        return $package;
    }
    public function whoBookedEvent(Request $request)
    {
        $id= $request->id;
        $event = DB::table('order_events')
            ->leftJoin('users','order_events.userId','=' , 'users.id')
            ->select('order_events.id', 'users.name','users.email','users.phone')
            ->where('order_events.eventId',$id)->get();
        
        return view('pages.agent.bookevent')->with('events',$event);
    }
}
