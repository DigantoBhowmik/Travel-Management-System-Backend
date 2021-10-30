<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class eventController extends Controller
{
    //
    function eventlist()
    {
        $events = event::all();
        return view('pages.event.events')->with('events',$events);
    }
    public function event()
    {
        return view('pages.agent.createevents');
    }
    public function createevents(Request $req)
    {
        $events = new event;
        $this->validate(
            $req,
            [
                'eventname' => 'required|min:4|max40'.$events->id,
                'shortdiscreption'=>'required',
                'discrepetion'=> 'required',
                'price'=>'required',
                'startingdate'=>'required',
                'endingdate'=>'required',
                'image'	=>'required',
                'deadline'	=>'required',
                'agentid'=>'required',
            ],
        );

        $events -> eventname = $req->eventname;
        $events -> shortdiscreption = $req -> shortdiscreption;
        $events -> discrepetion = $req -> discrepetion;
        $events -> price = $req-> price;
        $events -> startingdate = $req-> startingdate;
        $events -> endingdate = $req-> endingdate;
        $events -> image = $req-> image;
        $events -> deadline = $req-> deadline;
        $events -> agentid = $req-> agentid;
        $events->save();
        return redirect(route('events'));

    }

}
