<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\BlogPost;
use App\Models\SliderImage;
use App\Models\GalleryImage;
use App\Models\ContactMessage;
use App\Models\Booking;
use App\Models\HomeImage;
use App\Models\HomeSlider;
use App\Models\Jumbotron;
use App\Models\Diagram;
use App\Models\Tour;

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
        $bookings = Booking::all();

        //get count
        $totalEvents = Event::count();
        $totalBlogPosts = BlogPost::count();
        $totalBookings = Booking::count();
        $totalgallery = GalleryImage::count();

        return view('home',  compact('events', 'blogs', 'totalEvents', 'totalBlogPosts', 'bookings','totalBookings','totalgallery'));
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

    public function jumbotrons()
    {
        $jumbotrons = Jumbotron::all();
        return view('jumbotrons', compact('jumbotrons'));
    }

    public function home_sliders()
    {
        $home_sliders = HomeSlider::all();
        return view('home_sliders', compact('home_sliders'));
    }

    public function home_images()
    {
        $home_images = HomeImage::all();
        return view('home_images', compact('home_images'));
    }

    public function diagrams()
    {
        $diagrams = Diagram::all();
        return view('diagrams', compact('diagrams'));
    }

    public function tours()
    {
        $tours = Tour::all();
        return view('tours', compact('tours'));
    }

    public function jumbotronCreate()
    {
        return view('jumbotronCreate');
    }

    public function homeimageCreate()
    {
        return view('homeimageCreate');
    }

    public function homesliderCreate()
    {
        return view('homesliderCreate');
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

    public function diagramCreate()
    {
        return view('diagramCreate');
    }

    public function tourCreate()
    {
        return view('tourCreate');
    }
}
