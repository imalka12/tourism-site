<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GenerateItineraryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        /*
        {
    firstname: isuru,
    lastname: ranawaka,
    numberOfAdults: 2,
    numberOfChildren: 0,
    country: Sri Lanka,
    email: isu3ru@gmail.com,
    telephone: 0712912826,
    start: 2024-10-16,
    end: 2024-10-23,
    totalDays: 8,
    typePrefs: {Adventure: 12.0,
    Beach Relaxation: 72.0,
    Local Lifestyle: 20.0,
    Nature: 47.0,
    Wildlife: 25.0},
    activities: [2,
    3,
    4,
    5,
    6,
    7,
    8,
    9,
    10,
    11,
    12,
    15,
    16,
    17,
    18,
    19],
    vehicle: 2,
    hotelType: 3_star,
    roomType: family,
    numberOfRooms: 2,
    mealType: hb,
    budget_amount: 6000.0,
    special_needs: none}
        */
        return [
            'firstname' => ['required', 'string'],
            'lastname' => ['required', 'string'],
            'numberOfAdults' => ['required', 'integer'],
            'numberOfChildren' => ['required', 'integer'],
            'country' => ['required', 'string'],
            'email' => ['required', 'email'],
            'telephone' => ['required', 'string'],
            'start' => ['required', 'date'],
            'end' => ['required', 'date'],
            'totalDays' => ['required', 'integer'],
            'typePrefs' => ['required', 'array'],
            'activities' => ['required', 'array'],
            'activities.*' => ['required', 'integer', 'exists:activities,id'],
            'vehicle' => ['required', 'integer', 'exists:vehicles,id'],
            'hotelType' => ['required', 'string'],
            'roomType' => ['required', 'string'],
            'numberOfRooms' => ['required', 'integer'],
            'mealType' => ['required', 'string'],
            'budget_amount' => ['required', 'numeric'],
            'special_needs' => ['required', 'string'],
        ];
    }
}
