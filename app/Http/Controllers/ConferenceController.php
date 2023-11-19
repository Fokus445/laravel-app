<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;

class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();

        return view('conferences.index', compact('conferences'));
    }
    public function create()
    {
        return view('conferences.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'date' => 'required|date',
            'time' => 'required',
        ]);

        Conference::create($request->all());

        return redirect()->route('conferences.index')->with('success', 'Conference created successfully.');
    }

    public function edit($id)
    {
        $conference = Conference::findOrFail($id);

        return view('conferences.edit', compact('conference'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'date' => 'required|date',
            'time' => 'required',
        ]);

        $conference = Conference::findOrFail($id);
        $conference->update($request->all());

        return redirect()->route('conferences.index')->with('success', 'Conference updated successfully.');
    }

}
