<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\BlogPost;
use App\Models\SliderImage;
use App\Models\GalleryImage;
use App\Models\ContactMessage;
use App\Models\Booking;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //get all
        $events = Event::all();
        $blogs = BlogPost::all();

        //get count
        $totalEvents = Event::count();
        $totalBlogPosts = BlogPost::count();

        return view('home',  compact('events', 'blogs', 'totalEvents', 'totalBlogPosts'));
    }

    public function events()
    {
        $events = Event::all();
        return view('events', compact('events'));
    }

    public function bookings()
    {
        $bookings = Booking::all();
        return view('bookings', compact('bookings'));
    }

    public function blogs()
    {
        $blogs = BlogPost::all();
        return view('blogs', compact('blogs'));
    }

    public function sliders()
    {
        $sliders = SliderImage::all();
        return view('sliders', compact('sliders'));
    }

    public function gallery()
    {
        $galleries = GalleryImage::all();
        return view('gallery', compact('galleries'));
    }

    public function contact()
    {
        $contacts = ContactMessage::all();
        return view('contact', compact('contacts'));
    }

    public function eventCreate()
    {
        return view('eventCreate');
    }

    public function blogCreate()
    {
        return view('blogCreate');
    }

    public function sliderCreate()
    {
        return view('sliderCreate');
    }

    public function galleryCreate()
    {
        return view('galleryCreate');
    }
}
