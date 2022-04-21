<?php

use App\Http\Controllers\GoogleController;
use App\Http\Livewire\Dictionary\Home;
use App\Http\Livewire\Dictionary\Sort;
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

Route::get('/', function () {
    return view('auth.login');
});



require __DIR__.'/auth.php';

// Google login
Route::prefix('google')->name('google.')->group(function () {
    Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');
    
});


Route::prefix('dic')->name('dic.')->group(function () {
    Route::get('/home', Home::class)->name('home');
});


Route::get('/sort', Sort::class)->name('sort');