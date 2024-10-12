<?php

namespace App\Services;

use OpenAI;

class OpenAIService
{
    protected $client;
    protected $model;

    public function __construct()
    {
        $this->client = $this->getOpenApiClientObject();
    }

    protected function getOpenApiClientObject()
    {
        $apiKey = config('services.openai.api_key');
        $this->model = config('services.openai.model');

        if (empty($apiKey)) {
            throw new \Exception('OpenAI API key is not set');
        }

        return OpenAI::client($apiKey);
    }

    public function ask($messages): ?string
    {
        $response = $this->client->chat()->create([
            'model' => $this->model,
            'messages' => $messages,
        ]);

        return $response->choices[0]->message->content;
    }
}
