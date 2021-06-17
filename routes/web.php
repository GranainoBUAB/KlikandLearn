<?php

use App\Http\Controllers\EventController;
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

/* Route::get('/', function () {
    return view('header');
}); */

Auth::routes();

Route::get('/', [App\Http\Controllers\EventController::class, 'index'])->name('home');
//Route::get('/home', [App\Http\Controllers\EventController::class, 'index']); // esta linea corrige un fallo cuando se hace el primer login
Route::get('/create', [App\Http\Controllers\EventController::class, 'create'])->middleware('isadmin')->name('createEvent');
//Route::get('/delete', [App\Http\Controllers\EventController::class, 'destroy'])->middleware('isadmin')->name('deleteEvent');
Route::post('/', [App\Http\Controllers\EventController::class, 'store'])->middleware('auth')->name('store');
Route::get('/inscribe/{id}', [App\Http\Controllers\EventController::class, 'inscribe'])->middleware('auth')->name('inscribe');

Route::resource('show', App\Http\Controllers\EventController::class);
Route::resource('events', App\Http\Controllers\EventController::class)->middleware('isadmin');

/* Route::get('/signup', [App\Http\Controllers\EventController::class, 'viewSignedUp'])->middleware('auth')->name('signup'); */



