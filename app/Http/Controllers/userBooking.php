<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userBooking extends Controller
{
    public function mybooking()
    {
        $event = DB::table('order_events')
            ->leftJoin('events','order_events.eventId','=' , 'events.id')
            ->select('order_events.id', 'events.name','events.price','events.startdate','events.enddate')
            ->where('order_events.userId',Session()->get('userId'))->get();
        $package = DB::table('order_packages')
            ->leftJoin('packages','order_packages.packageId','=' , 'packages.id')
            ->select('order_packages.id', 'packages.name','packages.price','order_packages.date')
            ->where('order_packages.userId',Session()->get('userId'))->get();
        // return $event;
        return view('pages.user.mybooking',['events'=>$event,'packages'=>$package]);
    }
}
