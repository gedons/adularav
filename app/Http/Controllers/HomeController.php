<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }

    public function events()
    {
        return view('events');
    }

    public function bookings()
    {
        return view('bookings');
    }

    public function blogs()
    {
        return view('blogs');
    }

    public function sliders()
    {
        return view('sliders');
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
}
