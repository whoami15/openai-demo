<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class TextCompletion extends Controller
{
    public function __invoke(Request $request)
    {
        $request->whenFilled('text', function ($text) {
            $response = OpenAI::completions()->create([
                'model' => 'text-davinci-003',
                'prompt' => $text, // Why aren\'t birds real?
                'max_tokens' => 256,
                'temperature' => 0
            ]);

            dd($response->choices[0]->text);
        }, function () {
            abort(404);
        });
    }
}
