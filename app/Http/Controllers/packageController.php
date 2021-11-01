<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Package;
use App\Models\order;

class packageController extends Controller
{
    //
    public function package()
    {
        
        $packages=Package::where('agentId',Session()->get('userId'))->get();
        
        return view('pages.agent.createpackages')->with('packages',$packages);
    }

    function packagelist()
    {
        $packages = package::all();
        return view('pages.package.packages')->with('packages',$packages);
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
        return back()->with('message','Your Package Added');
    }

    public function packdetails(Request $req)
    {
        $id= $req->id;
        $packages= package::where('id',$id)->first();
        return view('pages.package.packdetails')->with('packages',$packages);
    }
    public function delete(Request $request)
    {
        $package = package::where('id',$request->id)->first();
        $package->delete();
        return redirect(route('createpackages'));
    }
    public function editPackage(Request $request)
    {
        $id= $request->id;
        $package= package::where('id',$id)->first();
        return view('pages.agent.editpackage')->with('package',$package);
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
        return redirect(route('createpackages'));
    }
    public function whoBooked(Request $request)
    {
        $id= $request->id;
        $package = DB::table('order_packages')
            ->leftJoin('users','order_packages.userId','=' , 'users.id')
            ->select('order_packages.id', 'users.name','users.email','users.phone')
            ->where('order_packages.packageId',$id)->get();
        return view('pages.agent.bookpackage')->with('packages',$package);
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
