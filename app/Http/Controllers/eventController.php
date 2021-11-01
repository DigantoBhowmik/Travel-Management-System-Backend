<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class eventController extends Controller
{
    //
    public function event()
    {
        $events=event::where('agentId',Session()->get('userId'))->get();
        return view('pages.agent.createevents')->with('events',$events);
    }

    function eventlist()
    {
        $events = event::all();
        return view('pages.event.events')->with('events',$events);
    }

    /////Admin event list
    function Admineventlist()
    {
        $events = event::all();
        return view('pages.admin.event.adminEventList')->with('events',$events);
    }
    public function Admineventdetails(Request $req)
    {
        $id= $req->id;
        $events= event::where('id',$id)->first();
        return view('pages.admin.event.adminEventDetails')->with('events',$events);
    }

    /////////////////////////

    public function createevents(Request $req)
    {
        $events = new event;
        $this->validate(
            $req,
            [
                'name'=>'required|min:4|max:50'.$events->id,
                'price'=>'required',
                'startdate'=>'required',
                'enddate'=>'required',
                'deadline'=>'required',
                'shortdesc'=>'required',
                'desc'=>'required',
                'image'=>'required',
                'agentname'=>'required',
                

            ],
            
            );
        
        $events -> name = $req->name;
        $events -> price = $req->price;
        $events -> startdate = $req->startdate;
        $events -> enddate = $req->enddate;
        $events -> deadline = $req->deadline;
        $events -> shortdesc = $req->shortdesc;
        $events -> desc = $req->desc;
        $events -> image = $req->image;
        $events -> agentId = $req->agentname;
        $events->save();
        return redirect(route('createevents'));
    }

    public function eventdetails(Request $req)
    {
        $id= $req->id;
        $events= event::where('id',$id)->first();
        return view('pages.event.eventdetails')->with('events',$events);
    }
    public function delete(Request $request)
    {
        $events = event::where('id',$request->id)->first();
        $events->delete();
        return redirect(route('createevents'));
    }
    public function editEvent(Request $request)
    {
        $id= $request->id;
        $events= event::where('id',$id)->first();
        return view('pages.agent.editevent')->with('event',$events);
    }
    public function updateEvent(Request $req)
    {
        $id= $req->id;
        $events = event::where('id',$id)->first();
        // $this->validate(
        //     $req,
        //     [
        //         'name'=>'required|min:4|max:50'.$packages->id,
        //         'price'=>'required',
        //         'shortdesc'=>'required',
        //         'desc'=>'required',
        //         'image'=>'required',
        //         'agentname'=>'required'

        //     ],
            
        //     );
        
        $events -> name = $req->name;
        $events -> price = $req->price;
        $events -> shortdesc = $req->shortdesc;
        $events -> desc = $req->desc;
        $events -> image = $req->image;
        $events -> agentId = $req->agentname;
        $events->save();
        return redirect(route('createevents'));
    }

}
