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

/*
Route::get('/', function () {
    return view('welcome');
});

// PER GLOBAL MIDDLEWARE
Route::view('users', 'users');
Route::view('home', 'home');
Route::view('noaccess', 'noaccess');

// PER GROUP MIDDLEWARE

Route::view('home', 'home');

Route::view('noaccess', 'noaccess');

Route::group(['middleware' => ['protectedPage']], function(){
    Route::view('users', 'users');
    Route::get('/', function () {
        return view('welcome');
    });

}); */

// PER ROUTE MIDDLEWARE

Route::view('users', 'users')->middleware('protectedPage');
Route::view('home', 'home');
Route::view('noaccess', 'noaccess');
