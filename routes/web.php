<?php

use App\Http\Controllers\ClassScheduleController;
use App\Http\Controllers\CourseAssigneeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\YearlevelController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'index'])->name('student');

Route::prefix('student')->group(function () {
    Route::post('/store', [StudentController::class, 'store'])->name('studentstore');
    Route::get('/show', [StudentController::class, 'show'])->name('studentshow');
    Route::get('/edit', [StudentController::class, 'edit'])->name('studentedit');
    Route::post('/update', [StudentController::class, 'update'])->name('studentupdate');
    Route::post('/destroy', [StudentController::class, 'destroy'])->name('studentdestroy');
});

Route::prefix('yearlevel')->group(function () {
    Route::get('/', [YearlevelController::class, 'index'])->name('yearlevel');
    Route::post('/store', [YearlevelController::class, 'store'])->name('yearlevelstore');
    Route::get('/edit', [YearlevelController::class, 'edit'])->name('yearleveledit');
    Route::post('/update', [YearlevelController::class, 'update'])->name('yearlevelupdate');
    Route::post('/destroy', [YearlevelController::class, 'destroy'])->name('yearleveldestroy');
});

Route::prefix('course')->group(function () {
    Route::get('/', [CourseController::class, 'index'])->name('course');
    Route::post('/store', [CourseController::class, 'store'])->name('coursestore');
    Route::get('/edit', [CourseController::class, 'edit'])->name('courseedit');
    Route::post('/update', [CourseController::class, 'update'])->name('courseupdate');
    Route::post('/destroy', [CourseController::class, 'destroy'])->name('coursedestroy');
});

Route::prefix('subject')->group(function () {
    Route::get('/', [SubjectController::class, 'index'])->name('subject');
    Route::post('/store', [SubjectController::class, 'store'])->name('subjectstore');
    Route::get('/edit', [SubjectController::class, 'edit'])->name('subjectedit');
    Route::post('/update', [SubjectController::class, 'update'])->name('subjectupdate');
    Route::post('/destroy', [SubjectController::class, 'destroy'])->name('subjectdestroy');
});

Route::prefix('class_schedule')->group(function () {
    Route::get('/', [ClassScheduleController::class, 'index'])->name('class_schedule');
    Route::post('/store', [ClassScheduleController::class, 'store'])->name('class_schedulestore');
    Route::get('/edit', [ClassScheduleController::class, 'edit'])->name('class_scheduleedit');
    Route::post('/update', [ClassScheduleController::class, 'update'])->name('class_scheduleupdate');
    Route::post('/destroy', [ClassScheduleController::class, 'destroy'])->name('class_scheduledestroy');
});

Route::prefix('teacher')->group(function () {
    Route::get('/', [TeacherController::class, 'index'])->name('teacher');
    Route::post('/store', [TeacherController::class, 'store'])->name('teacherstore');
    Route::get('/edit', [TeacherController::class, 'edit'])->name('teacheredit');
    Route::post('/update', [TeacherController::class, 'update'])->name('teacherupdate');
    Route::post('/destroy', [TeacherController::class, 'destroy'])->name('teacherdestroy');
});

Route::prefix('course_assignee')->group(function () {
    Route::get('/', [CourseAssigneeController::class, 'index'])->name('course_assignee');
    Route::post('/store', [CourseAssigneeController::class, 'store'])->name('course_assigneestore');
    Route::get('/edit', [CourseAssigneeController::class, 'edit'])->name('course_assigneeedit');
    Route::post('/update', [CourseAssigneeController::class, 'update'])->name('course_assigneeupdate');
    Route::post('/destroy', [CourseAssigneeController::class, 'destroy'])->name('course_assigneedestroy');
});