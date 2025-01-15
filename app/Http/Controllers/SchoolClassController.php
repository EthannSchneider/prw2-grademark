<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolClass;
use App\Models\StudyPlan;
use App\Models\Student;

class SchoolClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $school_classes = SchoolClass::all();
        return view('school_class.index', compact('school_classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('school_class.create', ['school_class' => new SchoolClass(), 'study_plans' => StudyPlan::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $school_class = new SchoolClass($request->all());
        $school_class->saveOrFail();

        return redirect(route('school_classes.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(SchoolClass $school_class)
    {
        $availableStudents = Student::available()->get();
        return view('school_class.show', compact('school_class', 'availableStudents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SchoolClass $school_class)
    {
        $school_class->studentSync($request->students);
        return redirect(route('school_classes.show', $school_class));
    }
}
