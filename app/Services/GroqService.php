<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GroqService
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = env('GROQ_API_KEY');
    }

    public function getChatCompletion($messages, $model = 'llama3-8b-8192', $temperature = 1, $maxTokens = 1024, $topP = 1, $frequencyPenalty = 0, $stream = true, $stop = null)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
            'Content-Type' => 'application/json',
        ])->post('https://api.groq.com/openai/v1/chat/completions', [
            'messages' => $messages,
            'model' => $model,
            'temperature' => $temperature,
            'max_tokens' => $maxTokens,
            'top_p' => $topP,
            'frequency_penalty' => $frequencyPenalty,
            'stream' => $stream,
            'stop' => $stop,
        ]);

        $responseBody = $response->body();
        Log::info('API Status Code: ' . $response->status());
        Log::info('API Response Body: ', ['body' => $responseBody]);

        // Return the raw response body
        return $responseBody;
    }
}
