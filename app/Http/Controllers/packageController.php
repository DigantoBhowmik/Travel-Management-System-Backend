<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Package;

class packageController extends Controller
{
    //
    public function package()
    {
        $package=Package::where('id',Session()->get('userId'))->first();
        return view('pages.agent.createpackages')->with('package',$package);
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
        return redirect(route('packages'));
    }

    public function packdetails(Request $req)
    {
        $id= $req->id;
        $packages= package::where('id',$id)->first();
        return view('pages.package.packdetails')->with('packages',$packages);
    }

}
