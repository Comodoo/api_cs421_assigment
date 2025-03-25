<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AIController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/generate', function () {
//     return view('student.index');
// })->name('student.index');
Route::get('/students', [StudentController::class, 'index']);
Route::get('/subjects', [SubjectController::class, 'index']);


// Route::get('/generate', [AIController::class, 'index'])->name('student.index');
// Route::post('/predict', [AIController::class, 'predict'])->name('predict');
