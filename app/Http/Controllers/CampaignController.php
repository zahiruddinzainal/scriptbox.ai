<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class CampaignController extends Controller
{

    public function displayStep1()
    {
        return view('campaign.step1');
    }

    public function displayStep2()
    {
        $chatgpt_data = session('chatgpt_data');
        return view('campaign.step2', ['chatgpt_data' => $chatgpt_data]);
    }

    public function displayStep3()
    {
        return view('campaign.step3');
    }

    public function storeStep1(Request $request)
    {
        $search = "apa itu coca cola";

        $chatgpt_data = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . env('CHAT_GPT_API_KEY'),
        ])
            ->post("https://api.openai.com/v1/chat/completions", [
                "model" => "gpt-3.5-turbo",
                'messages' => [
                    [
                        "role" => "user",
                        "content" => $search
                    ]
                ],
                'temperature' => 0.5,
                "max_tokens" => 200,
                "top_p" => 1.0,
                "frequency_penalty" => 0.52,
                "presence_penalty" => 0.5,
                "stop" => ["11."],
            ])
            ->json();

        return redirect()->route('campaign.step2')->with('chatgpt_data', $chatgpt_data);
    }

}
