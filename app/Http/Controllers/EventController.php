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

    public function update(Request $request, $id)
    {
        // Validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'email' => 'required|email',
            'status' => 'required|string|in:pending,booked,completed',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Optional image update
        ];

        // Validate request data
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Fetch the event to update
        $event = Event::findOrFail($id);

        // Handle image update (if image is provided in the request)
        if ($request->hasFile('image')) {
            try {
                // Delete existing image (optional, depending on your logic)
                if ($event->url) {
                    $existingImagePath = public_path(str_replace('/images/', '', $event->url));
                    if (File::exists($existingImagePath)) {
                        File::delete($existingImagePath);
                    }
                }

                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $event->url = '/images/' . $imageName;
            } catch (Exception $e) {
                return response()->json(['message' => 'Failed to upload image: '  . $e->getMessage()], 500);
            }
        }

        // Update event data
        $event->name = $request->name;
        $event->date = $request->date;
        $event->status = $request->status;
        $event->email = $request->email;
        $event->description = $request->description;

        // Save changes to the database
        $event->save();

        $request->session()->flash('success', 'Event updated successfully!');

        return Redirect::route('events', $event->id);  
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
