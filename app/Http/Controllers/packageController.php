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
        // $msg='fuck';
        // return view('pages.agent.createpackages',['packages'=>$packages,'msg'=>$msg]);
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
                'agentname'=>'required'

            ],
            
            );
        
        $packages -> name = $req->name;
        $packages -> price = $req->price;
        $packages -> shortdesc = $req->shortdesc;
        $packages -> desc = $req->desc;
        $packages -> agentId = $req->agentname;
        $packages->save();
        return redirect(route('createpackages'));
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
        $packages -> agentId = $req->agentname;
        $packages->save();
        return redirect(route('createpackages'));
    }
    public function whoBooked(Request $request)
    {
        $id= $request->id;
        $srequest = DB::table('order')
            ->leftJoin('users','order.u_id','=' , 'users.id')
            ->select('order.*', 'users.name')
            ->where('order.p_id',$id)->get();
        // $package= order::join('user','order.u_id',"=",'user.id')::where('u_id',$id)->first();
        return $srequest;
    }
}
