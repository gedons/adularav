<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\BlogPost;
use App\Models\SliderImage;

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
        return view('bookings');
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
        return view('gallery');
    }

    public function contact()
    {
        return view('contact');
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
}
