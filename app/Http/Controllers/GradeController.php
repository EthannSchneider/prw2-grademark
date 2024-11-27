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
        $grades = Grade::fromUser(Auth::user());
        return view('grades.index', ['grades' => $grades, 'course' => $course]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Course $course)
    {
        return view('grades.create', ['grade' => new Grade(), 'course' => $course, 'courses' => Course::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Course $course, Request $request)
    {
        $grade = new Grade($request->all());
        $grade->user()->associate(Auth::user());
        $grade->saveOrFail();

        return redirect(route('courses.grades.index', $course));
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
        $courses = Course::all();
        return view('grades.edit', compact('grade', 'course', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Course $course, Grade $grade, Request $request)
    {
        $grade->updateOrFail($request->all());

        return redirect(route('courses.grades.show', [$course, $grade]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course, Grade $grade)
    {
        $grade->delete();

        return redirect(route('courses.grades.index', $course));
    }
}
