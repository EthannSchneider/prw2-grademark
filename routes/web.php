<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\RoleVerification;
use App\Role;

Route::get('/', function () {
    return redirect(route('dashboard'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware(RoleVerification::class . ':' . Role::Manager->value)->group(function () {
        Route::resource('students', StudentController::class)->only('index', 'show');
    });
    Route::middleware(RoleVerification::class . ':' . Role::Student->value)->group(function () {
        Route::get('/courses/{course}/grades', [GradeController::class, 'courseIndex'])->name('courses.grades.index');
        Route::resource('grades', GradeController::class);
    });
});

require __DIR__.'/auth.php';
