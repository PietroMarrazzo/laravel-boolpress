<?php

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

/**
 * ROTTA WELCOME PAGE
 */
Route::get('/', function () {
    return view('welcome');
});

/**
 * ROTTE PER IL LOGIN / REGISTRAZIONE
 */
Auth::routes();


// ROTTE PER UTENTI LOGGED
Route::prefix('admin')
    ->namespace('Admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function() {
        // HOME ADMIN
        Route::get('/', 'HomeController@index')->name('home');

        // ROTTE POST CRUD
    });

