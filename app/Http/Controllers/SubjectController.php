<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;


class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();

        return view('admins.showsubject', ['subjects' => $subjects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.createsubject');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Subject::create([
            'title' => $request->title,
            'description' => $request->description,
            'code' => $request->code
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subject = Subject::findOrFail($id);
        return view('admins.editsubject', ['subject' => $subject]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $subject = Subject::findOrFail($id);
        $subject->update([
            'title' => $request->title,
            'code' => $request->code,
            'description' => $request->description
        ]);

        return redirect()->route('subject.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();
        return redirect()->back();
    }
}
