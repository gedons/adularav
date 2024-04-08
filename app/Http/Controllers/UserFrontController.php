<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactMessageCreated;
use App\Models\Event;

class UserFrontController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function about()
    {
        return view('user.about');
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function event()
    {
        return view('user.event');
    }

    public function singleBlog()
    {
        return view('user.singleblog');
    }

    public function singleEvent()
    {
        return view('user.singleevent');
    }

    public function gallery()
    {
        return view('user.gallery');
    }

    public function book()
    {
        $events = Event::all();
        return view('user.book', compact('events'));
    }
    public function blog()
    {
        return view('user.blog');
    }

    public function send(Request $request)
    {
        // Validation rules
        $rules = [
            'subject' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ];

        // Validate request data
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Create contact message
        $contactMessage = ContactMessage::create([
            'subject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        // Send email notification to admin (optional)
        $this->sendContactEmail($contactMessage);

        // Flash success message
        $request->session()->flash('success', 'Your message has been sent successfully!');

        return redirect()->route('user.contact');
    }

    private function sendContactEmail(ContactMessage $contactMessage)
    {
        Mail::to('support@aduvieevents.com')->send(new ContactMessageCreated($contactMessage));
    }

}
