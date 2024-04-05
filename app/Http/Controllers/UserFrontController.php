<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function blog()
    {
        return view('user.blog');
    }
}
