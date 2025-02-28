<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
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

Route::prefix('course')->group(function () {
    Route::get('/', [CourseController::class, 'index'])->name('course');
    Route::post('/store', [CourseController::class, 'store'])->name('coursestore');
    Route::get('/edit', [CourseController::class, 'edit'])->name('courseedit');
    Route::post('/update', [CourseController::class, 'update'])->name('courseupdate');
    Route::post('/destroy', [CourseController::class, 'destroy'])->name('coursedestroy');
});

Route::prefix('yearlevel')->group(function () {
    Route::get('/', [YearlevelController::class, 'index'])->name('yearlevel');
    Route::post('/store', [YearlevelController::class, 'store'])->name('yearlevelstore');
    Route::get('/edit', [YearlevelController::class, 'edit'])->name('yearleveledit');
    Route::post('/update', [YearlevelController::class, 'update'])->name('yearlevelupdate');
    Route::post('/destroy', [YearlevelController::class, 'destroy'])->name('yearleveldestroy');
});