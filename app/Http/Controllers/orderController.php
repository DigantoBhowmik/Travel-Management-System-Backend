<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderPackage;
use App\Models\OrderEvent;

class orderController extends Controller
{
    //
    public function confirmPackage(Request $req)
    {
        $packages = new OrderPackage;
        $this->validate(
            $req,
            [
                'user'=>'required|min:4|max:50'.$packages->id,
                'date'=>'required',
            ],
            
            );
        
        $packages -> agentId = $req->agentId;
        $packages -> userId = $req->userId;
        $packages -> packageId = $req->packageId;
        $packages -> date = $req->date;
        $packages->save();
        return redirect(route('packages'));
    }
}
