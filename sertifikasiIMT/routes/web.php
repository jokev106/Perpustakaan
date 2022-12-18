<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth/login');
});

//admin
Route::prefix('adminpages')->middleware(['auth', 'isAdmin'])->group(function() {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    Route::resource('/addNewBook', App\Http\Controllers\SpesifikasiBukuController::class);
    Route::get('/editBook/{id}', [App\Http\Controllers\SpesifikasiBukuController::class, 'edit']);
    Route::Patch('/editBook/{id}', [App\Http\Controllers\SpesifikasiBukuController::class, 'update']);
    Route::Delete('/admin/{id}', [App\Http\Controllers\SpesifikasiBukuController::class, 'destroy']);
});

// Route::post('/addNewBook',[App\Http\Controllers\AdminController::class, 'store'])->name('addNewBook');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
