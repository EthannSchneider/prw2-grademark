<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grades = Grade::all();
        return view('grades.index', compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('grades.create', ['grade' => new Grade()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        (new Grade($request->all()))->saveOrFail();

        return redirect(route('grades.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Grade $grade)
    {
        return view('grades.show', compact('grade'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Grade $grade)
    {
        return view('grades.edit', compact('grade'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Grade $grade)
    {
        $grade->updateOrFail($request->all());

        return redirect(route('grades.show', $grade));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grade $grade)
    {
        $grade->delete();

        return redirect(route('grades.index'));
    }
}
