<?php
   /**
    BCS3453 [PROJECT]-SEMESTER 2324/1
    Student ID: CB21032
    Student Name: MUHAMMAD BIN MOKHTAR 
    */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
   

    public function displayevent()
{
    $events = Event::all();
    $userType = auth()->user()->usertype;

    if ($userType === 'participant') {
     
        return view('participant.event_list', compact('events'));
    } elseif ($userType === 'organizer') {
      
        return view('organizer.event_list', compact('events'));
    } else {
      
        return abort(403); 
    }
}

    public function publicshow()
    {
        $events = Event::all();
        return view('events', compact('events'));
    }

    public function showOrganizerEvents()
    {

        $userId = Auth::id();
        $events = Event::where('user_id', $userId)->get();

        return view('organizer.create_event', compact('events'));
    }

    public function store(Request $request)
    {
        Event::create([
            'eventname' => $request->eventname,
            'location' => $request->location,
            'date' => $request->date,
            'description' => $request->description,
            'contact' => $request->contact,	
            'user_id' => Auth::user()->id,
        ]);

        session()->flash('success', 'Event created successfully!');

        return redirect()->route('organizer.create_event');
    }

    public function delete($id)
    {
        $event = Event::find($id);
        $event->delete();
        
    return redirect()->route('organizer.create_event')->with('success', 'Event deleted');
    }

    public function edit($id)
    {
        $event = Event::find($id);
    
        return view('organizer.edit_event', compact('event'));
    }
    
    public function update(Request $request, $id)
{
   $event = Event::find($id);
   $event -> update($request->all());
    return redirect()->route('organizer.create_event')->with('success', 'Event updated successfully');
}




}


