<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class eventController extends Controller
{
    //
    function eventlist()
    {
        return view('pages.event.events');
    }

}
