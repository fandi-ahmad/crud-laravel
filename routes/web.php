<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/home/show', [HomeController::class, 'showHtml']);
Route::get('/home/learn', [HomeController::class, 'learn']);
Route::get('/home/usehead', [HomeController::class, 'useHead']);