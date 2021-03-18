<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->get('/doctors', [DoctorController::class, 'index']);
Route::middleware('api')->get('/departments', [DepartmentController::class, 'index']);

Route::middleware('api')->post('/doctors/send-email', [DoctorController::class, 'sendEmail']);
