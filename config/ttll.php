<?php

return [

    'emails' => [
        'inquiry' => [
            'to' => [
                'name' => env('EMAIL_INQUIRY_TO_NAME'),
                'email' => env('EMAIL_INQUIRY_TO_EMAIL'),
            ],
        ],
        'contact' => [
            'to' => [
                'name' => env('EMAIL_CONTACT_TO_NAME'),
                'email' => env('EMAIL_CONTACT_TO_EMAIL'),
            ],
        ],
        'tailor_made' => [
            'to' => [
                'name' => env('EMAIL_TAILOR_MADE_TO_NAME'),
                'email' => env('EMAIL_TAILOR_MADE_TO_EMAIL'),
            ],
        ],
        'response' => [
            'from' => [
                'name' => env('EMAIL_RESPONSE_FROM_NAME'),
                'email' => env('EMAIL_RESPONSE_FROM_EMAIL'),
            ],
        ],
    ],

];
