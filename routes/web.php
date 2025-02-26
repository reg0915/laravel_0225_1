<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/student/del', [StudentController::class, 'del']);
Route::resource('student', StudentController::class);
// Route::get('/test', [TestController::class]);
// Route::resource('test', TestController::class);