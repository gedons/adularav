<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|string|email|unique:bookings,email',
            'phone' => 'required|string',
            'date' => 'required|date|unique:bookings,date',
            'description' => 'required|string',
            'status' => 'nullable|in:booked,completed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $booking = Booking::create($request->all());

        $request->session()->flash('success', 'Booking created successfully!');
        return redirect()->route('user.book');
    }
}
