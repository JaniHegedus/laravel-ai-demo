<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AIController extends Controller
{
    public function index()
    {
        return view('demo');
    }
    public function analyze(Request $request)
    {
        // Get the code input from the request
        $code = $request->input('code');

        // Send the code to the Python API
        $response = Http::timeout(180)->post('http://localhost:5000/analyze', [
            'code' => $code,
        ]);

        // Check if the request was successful
        if ($response->successful()) {
            $insight = $response->json('insight');
            return view('demo', ['insight' => $insight, 'code' => $code]);
        } else {
            return view('demo', ['error' => 'Failed to retrieve insights from the AI model.']);
        }
    }
}
