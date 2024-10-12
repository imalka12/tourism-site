<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Http\Requests\GenerateItineraryRequest;
use App\Services\OpenAIService;
use Illuminate\Http\JsonResponse;

class OpenAiController extends Controller
{
    public OpenAIService $openAIService;

    public function __construct(OpenAIService $openAIService)
    {
        $this->openAIService = $openAIService;
    }

    public function generateItinerary(GenerateItineraryRequest $request): JsonResponse
    {
        $data = $request->validated();

        // construct instruction message based on the request payload
        $instructionMessage = "You are a travel agent helping a client plan a trip to Sri Lanka.
        The client is a family of {$data['numberOfAdults']}  with {$data['numberOfChildren']} children.
        They are interested in a {$data['totalDays']}-day trip starting on {$data['start']} and ending on {$data['end']}.
        They are interested in " . implode(', ', array_keys($data['typePrefs'])) . ".
        They are interested in activities such as " . implode(', ', $data['activities']) . ".
        They would like to stay in {$data['hotelType']} hotels with {$data['roomType']} rooms.
        They would like to rent a {$data['vehicle']} for the trip.";

        $messages = [
            [
                'role' => 'system',
                'content' => 'Act as a professional travel agent who is very skilled in writing travel itineraries
                for many international tourists visiting Sri Lanka.'
            ],
            [
                'role' => 'user',
                'content' => $instructionMessage,
            ],
            [
                'role' => 'user',
                'content' => 'Generate an itinerary for the client based on the given instructions and data.
                You can add additional data and use additional data sources combined with the given data.
                Include detailed descriptions of the locations, activities, and other relevant information.
                Include location to location distance, cost of travel, and travel time in hours also.
                Give day-by-day activities per location as a list. Provide additional details such as ticket prices, and opening/closing hours.
                Plan within the given budget only. Give the total estimated budget, total travel time, as separate fields for the entire trip.
                 Provide the generated itinerary in markdown format.
                 Dont include any usual talk. Just send the data please. Follow the instructions strictly.'
            ]
        ];

        $response = $this->openAIService->ask($messages);

//        logger('OpenAI response: ' . $response);

//        $message = json_decode($response);
//        $jsonContent = json_decode($message->json);
//        $markdownContent = $message->markdown;
//
//        dump($message);
//        dump($jsonContent);
//        die($markdownContent);

        return response()->json([
            'message' => $response,
        ]);
    }
}
