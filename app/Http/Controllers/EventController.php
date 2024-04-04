<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Mail;
use App\Mail\EventCreated;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

 
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        // Validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'email' => 'required|email',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',  
        ];
    
        // Validate request data
        $validator = Validator::make($request->all(), $rules);
    
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422); 
        }
    
        // Store image (with error handling)
        try {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        } catch (Exception $e) {
            return response()->json(['message' => 'Failed to upload image: ' . $e->getMessage()], 500);  
        }
    
        // Create event (with error handling)
        try {
            $event = Event::create([
                'name' => $request->name,
                'date' => $request->date,                
                'email' => $request->email,
                'description' => $request->description,
                'url' => '/images/' . $imageName,
            ]);
        } catch (Exception $e) {
            return response()->json(['message' => 'Failed to create event: ' . $e->getMessage()], 500);  
        }
    
        // Send email notification
        Mail::to($request->email)->send(new EventCreated($event));
    
        $request->session()->flash('success', 'Event created successfully!');

        return Redirect::route('events');
    }

    public function edit(Event $event)
    {
        return view('eventEdit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'status' => 'required|string|in:pending,booked,completed',
            'email' => 'required|email',
            'description' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
    
        // Update event details
        $event->name = $request->name;
        $event->date = $request->date;
        $event->status = $request->status;
        $event->email = $request->email;
        $event->description = $request->description;
    
        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->storeAs('public/images');

            $event->url = $imagePath;
        }
    
        $event->save();
    
        return redirect()->route('events')->with('success', 'Event updated successfully.');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        if (Storage::disk('public')->exists($event->url)) {
            Storage::disk('public')->delete($event->url);
        }
    
        $event->delete();

        session()->flash('success', 'Event deleted successfully!');
        return redirect()->route('events');
    }
    
}
