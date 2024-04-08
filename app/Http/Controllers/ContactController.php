<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactReply;

class ContactController extends Controller
{
    public function destroy($id)
    {
        $contact = ContactMessage::findOrFail($id);

        $contact->delete();

        session()->flash('success', 'Message deleted successfully!');
        return redirect()->route('contact');
    }

    public function show(ContactMessage $contact)
    {
        return view('ContactShow', compact('contact'));
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
        $contactMessage = ContactMessage::findOrFail($id);

        // Send reply email to user
        $this->sendReplyEmail($contactMessage, $request->message);

        // Flash success message
        $request->session()->flash('success', 'Email has been sent successfully!');

        return redirect()->route('contact');
    }

    // Helper function to send reply email
    private function sendReplyEmail(ContactMessage $contactMessage, $replyMessage)
    {
        Mail::to($contactMessage->email)->send(new ContactReply($contactMessage, $replyMessage));
    }

}
