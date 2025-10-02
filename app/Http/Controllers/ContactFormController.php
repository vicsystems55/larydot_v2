<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormRecieptMail;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactFormController extends Controller
{
    //

    public function contactFormSubmit(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Save the form data to the database
        ContactForm::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'status' => 'pending', // default status
        ]);


        // send mail to admin about new contact form submission
        // wrap in try catch to avoid breaking the app if mail fails
        try {
            Mail::to('info@larydotrecruitment.uk')->send(new ContactFormRecieptMail($request->all()));
        } catch (\Exception $e) {
            \Log::error('Mail not sent: ' . $e->getMessage());
        }

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
