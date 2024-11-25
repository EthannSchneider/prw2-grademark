<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Course $course)
    {
        $grades = Grade::whereBelongsTo($course)->get();
        
        return view('grades.index', compact('grades', 'course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Course $course)
    {
        return view('grades.create', ['grade' => new Grade(), 'course' => $course]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Course $course)
    {
        $grades = (new Grade($request->all()));
        $grades->course()->associate($course);
        $grades->user()->associate(Auth::user());
        $grades->saveOrFail();

        return redirect(route('grades.index', compact('course')));
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course, Grade $grade)
    {
        return view('grades.show', compact('grade', 'course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course, Grade $grade)
    {
        return view('grades.edit', compact('grade', 'course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course, Grade $grade)
    {
        $grade->updateOrFail($request->all());

        return redirect(route('grades.show', compact('grade', 'course')));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course, Grade $grade)
    {
        $grade->delete();

        return redirect(route('grades.index', $course));
    }
}
