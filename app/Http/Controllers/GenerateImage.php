<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI;

class GenerateImage extends Controller
{
    public function __invoke(Request $request)
    {
        $client = OpenAI::client('YOUR-TOKEN-HERE');

        $request->whenFilled('text', function ($text) use ($client) {
            $response = $client->images()->create([
                'prompt' => $text, // 'A Shiba Inu dog wearing a beret and black turtleneck'
                'n' => 1,
                'size' => '1024x1024',
                'response_format' => 'url',
            ]);

            dd($response->data[0]->url);
        }, function () {
            abort(404);
        });

    }
}
