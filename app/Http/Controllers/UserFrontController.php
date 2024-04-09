<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactMessageCreated;
use App\Models\Event;
use App\Models\SliderImage;
use App\Models\GalleryImage;
use App\Models\BlogPost;

class UserFrontController extends Controller
{
    public function index()
    {
        $sliders = SliderImage::all();
        $galleries = GalleryImage::all();
        $blogs = BlogPost::all();
        return view('user.index', compact('sliders','galleries','blogs'));
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
        $events = Event::all();
        return view('user.event', compact('events'));
    }

    public function singleBlog(BlogPost $blog)
    {
        return view('user.singleblog', compact('blog'));
    }

    public function singleEvent()
    {
        return view('user.singleevent');
    }

    public function gallery()
    {
        $galleries = GalleryImage::all();
        return view('user.gallery', compact('galleries'));
    }

    public function book()
    {
        $events = Event::all();
        return view('user.book', compact('events'));
    }
    public function blog()
    {
        $blogs = BlogPost::all();
        return view('user.blog', compact('blogs'));
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
