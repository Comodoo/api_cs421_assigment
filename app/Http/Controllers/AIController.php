<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AIController extends Controller
{
    public function predict(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'prompt' => 'required|string',
            'max_length' => 'nullable|integer|min:10|max:500',
        ]);

        // Call the Python Flask API
        $response = Http::post('http://127.0.0.1:5000/predict', [
            'prompt' => $validated['prompt'],
            'max_length' => $validated['max_length'] ?? 100,
        ]);

        // Return the AI's response to the frontend
        if ($response->ok()) {
            return response()->json($response->json());
        } else {
            return response()->json(['error' => 'Failed to connect to AI server'], 500);
        }
    }
}
