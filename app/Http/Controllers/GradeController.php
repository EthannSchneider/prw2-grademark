<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Course;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Course $course = null)
    {
        if ($course === null) {
            $grades = Grade::whereBelongsTo(Auth::user())->get();
            return view('grades.index', compact('grades'));
        }

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

        return redirect(route('courses.grades.index', compact('course')));
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course, Grade $grade)
    {
        $is_mine = $grade->user()->is(Auth::user());
        return view('grades.show', compact('grade', 'is_mine'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Grade $grade)
    {
        if ($grade->user()->isNot(Auth::user())) {
            abort(403);
        }
        return view('grades.edit', compact('grade'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Grade $grade)
    {
        if ($grade->user()->isNot(Auth::user())) {
            abort(403);
        }
        $grade->updateOrFail($request->all());

        return redirect(route('grades.show', compact('grade')));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grade $grade)
    {
        if ($grade->user()->isNot(Auth::user())) {
            abort(403);
        }
        $grade->delete();

        return redirect(route('grades.index'));
    }
}
