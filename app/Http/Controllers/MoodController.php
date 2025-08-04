<?php

namespace App\Http\Controllers;

use App\Models\Mood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MoodController extends Controller
{
    public function index()
    {
        $moods = Auth::user()->moods()->orderBy('created_at', 'desc')->take(10)->get();
        return view('features.mood-tracker', compact('moods'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'mood_type' => 'required|string',
            'description' => 'nullable|string',
            'notes' => 'nullable|string'
        ]);

        $mood = Auth::user()->moods()->create([
            'mood_type' => $request->mood_type,
            'description' => $request->description,
            'notes' => $request->notes
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Mood saved successfully!',
            'mood' => $mood
        ]);
    }

    public function history()
    {
        $moods = Auth::user()->moods()->orderBy('created_at', 'desc')->get();
        return response()->json($moods);
    }
}
