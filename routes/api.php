<?php

use App\Http\Controllers\Api\StaffController;
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

Route::get('staff', [StaffController::class, 'index']);
Route::post('staff/store', [StaffController::class, 'store']);
Route::get('staff/{id}', [StaffController::class, 'show']);
Route::post('staff/update/{id}', [StaffController::class, 'update']);
Route::delete('staff/{id}', [StaffController::class, 'destroy']);