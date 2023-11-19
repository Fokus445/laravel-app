<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Controllers\ConferenceController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', '/conferences');
Route::get('/conferences', [ConferenceController::class, 'index'])-> name('conferences.index');
Route::get('/conferences/create', [ConferenceController::class, 'create'])->name('conferences.create');
Route::post('/conferences/store', [ConferenceController::class, 'store'])->name('conferences.store');
Route::get('/conferences/{id}/edit', [ConferenceController::class, 'edit'])->name('conferences.edit');
Route::put('/conferences/{id}/update', [ConferenceController::class, 'update'])->name('conferences.update');

Route::get('/login', 'AuthController@showLoginForm')->name('login');



