<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\http\Controllers\HomeController;
use App\http\Controllers\ContohController;
use App\http\Controllers\pegawaiController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SinglePostController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', [HomeController::class, 'index']);
// Route::get('/home/show', [HomeController::class, 'showHtml']);
// Route::get('/home/learn', [HomeController::class, 'learn']);
// Route::get('/home/usehead', [HomeController::class, 'useHead']);
// Route::get('/home/contoh', [HomeController::class, 'contoh']);
// Route::post('/home/contoh', [HomeController::class, 'contohPost']);

Route::resource('/contoh', ContohController::class);
Route::resource('/pegawai', pegawaiController::class);
Route::resource('/staff', StaffController::class);
Route::resource('/post', PostController::class);
// Route::resource('/post/1', SinglePostController::class);
// Route::resource('/post/{$id}', SinglePostController::class);

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', function() {
    Auth::logout();
    return redirect('/home');
});

// ===== STAFF =====

// Route::get('/staff', [StaffController::class, 'index'])->name('staff.index');                   // get all data
// Route::get('/staff/create', [StaffController::class, 'create'])->name('staff.index');           // menuju halaman form create
// Route::post('/staff', [StaffController::class, 'store'])->name('staff.index');                  // create data
// Route::get('/staff/{id}/edit', [StaffController::class, 'edit'])->name('staff.index');          // mendapatkan id dan menuju halaman edit
// Route::post('/staff/{id}', [StaffController::class, 'update'])->name('staff.index');            // update data (fail)
// Route::delete('/staff/{id}', [StaffController::class, 'destroy'])->name('staff.index');         // delete
