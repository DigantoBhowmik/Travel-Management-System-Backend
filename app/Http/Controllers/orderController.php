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
        $this->validate(
            $req,
            [
                'date'=>'required',
            ],
            
            );
        
        $packages -> userId = Session()->get('userId');
        $packages -> packageId = $req->packageId;
        $packages -> date = $req->date;
        $packages->save();
        return back()->with('message','Your order confirmed');
    }
    public function confirmevent(Request $req)
    {
        $packages = new OrderEvent();
        
        
        $packages -> userId = Session()->get('userId');
        $packages -> eventId = $req->eventId;
        $packages->save();
        return back()->with('message','Your order confirmed');
    }
}
