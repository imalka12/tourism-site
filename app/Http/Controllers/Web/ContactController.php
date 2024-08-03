<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function showContactUsPage(Request $request)
    {
        $pageSubHeading = 'Contact';
        $pageHeading = 'Explore Thaprobana (Pvt) Ltd.';
        $breadcrumbs = [
            ['title' => 'Home', 'link' => route('site.home')],
            ['title' => 'Contact Us', 'link' => ''],
        ];

        return view('pages.contact-us', compact('pageHeading', 'pageSubHeading', 'breadcrumbs'));
    }

    public function processContactRequest(Request $request)
    {
        $contactValidation = $request->validate([
            'contact_name' => 'required',
            'contact_email' => 'required|email',
            'contact_telephone' => 'nullable|numeric',
            'contact_country' => 'required',
            'contact_message' => 'nullable',
            'g-recaptcha-response' => 'required|captcha',
        ], [
            'g-recaptcha-response.required' => 'Checking the CAPTCHA is required.',
            'g-recaptcha-response.captcha' => 'Invalid CAPTCHA. Please try again.',
        ]);

        // send the contact request
        // send inquiry acknowledgment email
        $inquiryData = [
            'sender_salutation' => '',
            'sender_name' => $request->contact_name,
            'sender_email' => $request->contact_email,
            'sender_country' => $request->contact_country,
            'sender_phone' => $request->contact_telephone,
            'sender_message' => $request->contact_message,
        ];

        Mail::send('mailables.contact-acknowledgment', $inquiryData, function ($message) use ($inquiryData) {
            $responseFromName = config('ttll.emails.response.from.name');
            $responseFromEmail = config('ttll.emails.response.from.email');

            $message->from($responseFromEmail, $responseFromName);
            $message->to($inquiryData['sender_email'], $inquiryData['sender_name']);
            $message->replyTo($responseFromEmail, $responseFromName);
            $message->subject('Contact Request Received - Explore Thaprobana');
        });

        // send inquiry details internal email
        Mail::send('mailables.contact-request-details', $inquiryData, function ($message) use ($inquiryData) {
            $responseFromName = config('ttll.emails.response.from.name');
            $responseFromEmail = config('ttll.emails.response.from.email');
            $inquiryToName = config('ttll.emails.contact.to.name');
            $inquiryToEmail = config('ttll.emails.contact.to.email');

//            $message->from($inquiryToEmail, $inquiryToName);
            $message->from($responseFromEmail, $responseFromName);
            $message->to($inquiryToEmail, $inquiryToName);
            $message->replyTo($inquiryData['sender_email'], $inquiryData['sender_name']);
            $message->subject('Explore Thaprobana Website - New Contact Request from ' . $inquiryData['sender_name']);
        });

        $__return = route('site.contact');
        return redirect($__return)->with('response_success', 'Your message submitted successfully. Please check your email for confirmation.');
    }

}
