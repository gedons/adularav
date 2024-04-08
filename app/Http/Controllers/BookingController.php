<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Mail\UserBooking;

class BookingController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|string|email|',
            'phone' => 'required|string',
            'date' => 'required|date|unique:bookings,date',
            'description' => 'required|string',
            'status' => 'nullable|in:booked,completed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $booking = Booking::create($request->all());

        $request->session()->flash('success', 'Booking created successfully! We will get back to you very soon');
        return redirect()->route('user.book');
    }

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);

        $booking->delete();

        session()->flash('success', 'booking deleted successfully!');
        return redirect()->route('bookings');
    }

    public function show(Booking $booking)
    {
        return view('BookingShow', compact('booking'));
    }

    public function sendEmail(Request $request, $id)
    {
        // Validate the request data (message is required)
        $rules = [
            'message' => 'required|string',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Fetch the contact message to reply to
        $bookingMessage = Booking::findOrFail($id);

        // Send reply email to user
        $this->sendReplyEmail($bookingMessage, $request->message);

        // Flash success message
        $request->session()->flash('success', 'Your reply has been sent successfully!');

        return redirect()->route('bookings');
    }

        // Helper function to send reply email
        private function sendReplyEmail(Booking $bookingMessage, $replyMessage)
        {
            Mail::to($bookingMessage->email)->send(new UserBooking($bookingMessage, $replyMessage));
        }

}
