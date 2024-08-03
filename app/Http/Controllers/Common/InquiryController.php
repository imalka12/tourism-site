<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Mail;

class InquiryController extends Controller
{
    /**
     * Process the incoming request from the quick inqury form
     *
     * This function does a couple of things
     * 1. Send the email to the company email address with the request information
     * 2. Send the user an acknowledgement email
     */
    public function processQuickInquiry(Request $request)
    {
        $return_url = $request->get('return_url');
        $sender_salutation = $request->get('sender_salutation');
        $sender_name = $request->get('sender_name');
        $sender_email = $request->get('sender_email');
        $sender_country = $request->get('sender_country');
        $sender_phone = $request->get('sender_phone');
        $contact_by = $request->get('contact_by');
        $sender_message = $request->get('sender_message');

        // validate details
        $validator = Validator::make($request->all(), [
            'sender_salutation' => 'required',
            'sender_name' => 'required',
            'sender_email' => 'required|email',
            'sender_country' => 'required',
            'sender_phone' => 'required|numeric',
            'sender_contact_by' => 'nullable',
            'sender_message' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect($return_url)
                ->withErrors($validator)
                ->withInput();
        }

        // send inquiry acknowledgment email
        $inquiryData = [
            'sender_salutation' => $sender_salutation,
            'sender_name' => $sender_name,
            'sender_email' => $sender_email,
            'sender_country' => $sender_country,
            'sender_phone' => $sender_phone,
            'contact_by' => $contact_by,
            'sender_message' => $sender_message,
        ];

        Mail::send('mailables.inquiry-acknowledgment', $inquiryData, function ($message) use($inquiryData) {
            $responseFromName = config('ttll.emails.response.from.name');
            $responseFromEmail = config('ttll.emails.response.from.email');

            $message->from($responseFromEmail, $responseFromName);
            $message->to($inquiryData['sender_email'], $inquiryData['sender_name']);
            $message->replyTo($responseFromEmail, $responseFromName);
            $message->subject('Inquiry Request Received - Explore Thaprobana');
        });

        // send inquiry details internal email
        Mail::send('mailables.inquiry-request-details', $inquiryData, function ($message) use($inquiryData) {
            $responseFromName = config('ttll.emails.response.from.name');
            $responseFromEmail = config('ttll.emails.response.from.email');
            $inquiryToName = config('ttll.emails.inquiry.to.name');
            $inquiryToEmail = config('ttll.emails.inquiry.to.email');

//            $message->from($inquiryData['sender_email'], $inquiryData['sender_name']);
            $message->from($responseFromEmail, $responseFromName);
            $message->to($inquiryToEmail, $inquiryToName);
            $message->replyTo($inquiryData['sender_email'], $inquiryData['sender_name']);
            $message->subject('Explore Thaprobana Website - New Inquiry from ' . $inquiryData['sender_name']);
        });

        return redirect($return_url)->with('response_success', 'Your inquiry message submitted successfully. Please check your email for confirmation.');
    }

}
