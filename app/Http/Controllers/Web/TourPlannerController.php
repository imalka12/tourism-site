<?php

namespace App\Http\Controllers\Web;

use App\CustomTour;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TourPlannerController extends Controller
{
    public function showPlanYourTourPage(Request $request)
    {
        $pageSubHeading = 'Tours';
        $pageHeading = 'Plan Your Tour';

        $breadcrumbs = [
            ['title' => 'Home', 'link' => route('site.home')],
            ['title' => 'Plan Your Tour', 'link' => ''],
        ];

        return view('pages.plan-your-tour', compact('pageHeading', 'pageSubHeading', 'breadcrumbs'));
    }

    public function processTailorPadeSubmission(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'arrival_date' => 'required|date',
            'arrival_time' => 'nullable|date_format:H:i',
            'departure_date' => 'required|date',
            'departure_time' => 'nullable|date_format:H:i',
            'adults_count' => 'required|integer|min:0',
            'children_count' => 'required|integer|min:0',
            'rooms_count' => 'required|integer|min:0',
            'room_types' => 'nullable|array',
            'holiday_types' => 'nullable',
            'accomodation_types' => 'nullable|array',
            'typeOfVehicle' => 'nullable|string',
            'specialInterestedActivities' => 'nullable|array',
            'custname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'country' => 'required|string|max:255',
            'special_requirements' => 'nullable|string',
            'total_accomodation_budget' => 'nullable|numeric',
          'g-recaptcha-response' => 'required|captcha',
        ], [
            'g-recaptcha-response.required' => 'You have to choose the file!',
            'g-recaptcha-response.required' => 'You have to choose type of the file!'
        ]);

        $validatedData['room_types'] = $validatedData['room_types'] ?? [];
        $validatedData['holiday_types'] = $validatedData['holiday_types'] ?? [];
        $validatedData['accomodation_types'] = $validatedData['accomodation_types'] ?? [];

        // make arrays to strings for room_types, holiday_types, accomodation_types
        $validatedData['room_types'] = implode(',', $validatedData['room_types'] ?? []);
//        $validatedData['holiday_types'] = implode(',', $validatedData['holiday_types'] ?? []);
        $validatedData['accomodation_types'] = implode(',', $validatedData['accomodation_types'] ?? []);


        $vd = [];
        foreach ($validatedData['holiday_types'] as $k => $v) {
            $percent = intval($v) / 10 * 100;
            $vd[$k] = ucwords($k) . ': ' . intval($percent) . "%";
        }

        $validatedData['holiday_types'] = implode(", ", $vd);

        // set default value for specialInterestedActivities if it is null
        if (!isset($validatedData['specialInterestedActivities'])) {
            $validatedData['specialInterestedActivities'] = '';
        } else {
            $validatedData['specialInterestedActivities'] = implode(', ', $validatedData['specialInterestedActivities']);
        }
//        dd($validatedData['holiday_types']);

        // Create a new CustomTour record
        $customTour = CustomTour::create($validatedData);

        // Send a thank-you email to the customer
        $tourData = [
            'arrival_date' => $validatedData['arrival_date'],
            'arrival_time' => $validatedData['arrival_time'],
            'departure_date' => $validatedData['departure_date'],
            'departure_time' => $validatedData['departure_time'],
            'adults_count' => $validatedData['adults_count'],
            'children_count' => $validatedData['children_count'],
            'rooms_count' => $validatedData['rooms_count'],
            'room_types' => $validatedData['room_types'],
            'holiday_types' => /*replace all _ */ str_replace('_', ' ', $validatedData['holiday_types']),
            'accomodation_types' => $validatedData['accomodation_types'],
            'typeOfVehicle' => $validatedData['typeOfVehicle'] ?? '',
            'specialInterestedActivities' => $validatedData['specialInterestedActivities'],
            'custname' => $validatedData['custname'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'country' => $validatedData['country'],
            'special_requirements' => $validatedData['special_requirements'],
            'total_accomodation_budget' => $validatedData['total_accomodation_budget'],
        ];

        Mail::send('mailables.tailor-made-acknowledgement', $tourData, function ($message) use ($tourData) {
            $responseFromName = config('ttll.emails.response.from.name');
            $responseFromEmail = config('ttll.emails.response.from.email');

            $message->from($responseFromEmail, $responseFromName);
            $message->to($tourData['email'], $tourData['custname']);
            $message->replyTo($responseFromEmail, $responseFromName);
            $message->subject('Tailor-made Tour Request Received - Explore Thaprobana');
        });

        // send inquiry details internal email
        Mail::send('mailables.tailor-made-request', $tourData, function ($message) use ($tourData) {
            $tailorMadeToName = config('ttll.emails.tailor_made.to.name');
            $tailorMadeToEmail = config('ttll.emails.tailor_made.to.email');

            $responseFromName = config('ttll.emails.response.from.name');
            $responseFromEmail = config('ttll.emails.response.from.email');

            $message->from($responseFromEmail, $responseFromName);
            $message->to($tailorMadeToEmail, $tailorMadeToName);
            $message->replyTo($tourData['email'], $tourData['custname']);
            $message->subject('Explore Thaprobana Website - Tailor-made Tour Request from ' . $tourData['custname']);
        });

        return redirect()->route('site.tailor-made')
            ->with('response_success', 'Thank you for your request! We will contact you soon.');
    }
}
