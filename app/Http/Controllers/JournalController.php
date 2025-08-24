<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Journal;

class JournalController extends Controller
{
    public function index()
    {
        $journals = auth()->user()->journals()->orderBy('created_at', 'desc')->get();
        return view('features.journal-entry', compact('journals'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:10000'
        ]);

        auth()->user()->journals()->create([
            'content' => $request->content
        ]);

        return redirect()->route('journal_entry')->with('success', 'Journal entry saved successfully!');
    }

    public function destroy(Journal $journal)
    {
        if ($journal->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $journal->delete();

        return redirect()->route('journal_entry')->with('success', 'Journal entry deleted successfully!');
    }
}
