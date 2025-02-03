<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\StudentController;

Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::post('/students/import', [StudentController::class, 'import'])->name('students.import');
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
