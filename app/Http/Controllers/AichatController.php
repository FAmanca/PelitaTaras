<?php

namespace App\Http\Controllers;

use App\Services\GroqService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AichatController extends Controller
{
    protected $groqService;

    public function __construct(GroqService $groqService)
    {
        $this->groqService = $groqService;
    }

    public function index()
    {
        return view('ai', [
            'title' => 'Yume AI'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $messages = [

                [
                    'role' => 'system',
                    "content" => "Anda adalah psikater bernama Yume. Tugas Anda adalah membantu remaja dengan masalah kesehatan mental mereka, memberikan dukungan, dan saran yang berguna. Jawablah selalu dalam bahasa Indonesia dengan singkat dan bermakna, serta tidak memberikan respon yang terlalu panjang karena remaja butuh kepastian",
                ],
            [
                'role' => 'user',
                'content' => $request->input('content')
            ]
        ];

        $responseBody = $this->groqService->getChatCompletion(
            $messages,
            'llama3-8b-8192',
            1,
            1024,
            1,
            0,
            true,
            null
        );

        // Parse the response body to extract meaningful content
        // This example assumes you may need to parse it based on the actual structure
        $parsedResponse = $this->parseGroqResponse($responseBody);

        // Log the parsed response
        Log::info('Parsed Groq API Response:', ['response' => $parsedResponse]);

        return view('ai', [
            'title' => 'Yume AI',
            'response' => $parsedResponse
        ]);
    }

    protected function parseGroqResponse($responseBody)
    {
        // Example parsing, adjust based on actual response structure
        $parsedData = [];
        $lines = explode("\n", $responseBody);
        foreach ($lines as $line) {
            if ($line) {
                $data = json_decode(substr($line, 5), true);
                if (isset($data['choices'][0]['delta']['content'])) {
                    $parsedData[] = $data['choices'][0]['delta']['content'];
                }
            }
        }
        return implode('', $parsedData);
    }
}
