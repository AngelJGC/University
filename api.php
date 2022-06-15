<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/teachers', [App\Http\Controllers\TeacherController::class,'index']);
Route::get('/students', [App\Http\Controllers\StudentController::class,'index']);
Route::get('/admins', [App\Http\Controllers\AdminController::class,'index']);

Route::post('/teachers', [App\Http\Controllers\TeacherController::class,'store']);
Route::post('/students', [App\Http\Controllers\StudentController::class,'store']);

Route::put('/teachers/{user}', [App\Http\Controllers\TeacherController::class, 'update']);
