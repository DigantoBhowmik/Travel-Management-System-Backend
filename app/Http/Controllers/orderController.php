<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\OrderPackage;
use App\Models\OrderEvent;

class orderController extends Controller
{
    //
    public function confirmPackage(Request $req)
    {
        $packages = new OrderPackage();
        // $this->validate(
        //     $req,
        //     [
        //         'user'=>'required|min:4|max:50',
        //         'date'=>'required',
        //     ],
            
        //     );
        
        $packages -> userId = Session()->get('userId');
        $packages -> packageId = $req->packageId;
        $packages -> date = $req->date;
        $packages->save();
        return redirect(route('packages'));
        return $packages;
    }
}
