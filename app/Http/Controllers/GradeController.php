<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grades = Grade::all();
        return view('grades', compact('grades'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createGrade');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'value' => 'required|integer'
        ]);

        Grade::create($validated);

        return Redirect::to("/grades");
    }

    /**
     * Display the specified resource.
     */
    public function show(Grade $grade)
    {
        return view('grade', compact('grade'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Grade $grade)
    {
        return view('editGrade', compact('grade'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Grade $grade)
    {
        $validated = $request->validate([
            'value' => 'required|integer'
        ]);

        $grade->value = $validated["value"];

        $grade->save();

        return Redirect::to("/grades/" . $grade->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grade $grade)
    {
        $grade->delete();

        return Redirect::to("/grades");
    }
}
