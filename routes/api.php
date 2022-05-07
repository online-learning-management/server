<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\CreditController;
use App\Http\Controllers\SpecialtyController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('/users', UserController::class);
Route::apiResource('/teachers', TeacherController::class);
Route::apiResource('/students', StudentController::class);
Route::apiResource('/specialties', SpecialtyController::class);
Route::apiResource('/subjects', SubjectController::class);
Route::apiResource('/classes', ClassController::class);
Route::apiResource('/credits', CreditController::class);
