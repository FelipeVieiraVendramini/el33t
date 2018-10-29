<?php

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

Route::get('/', function () { return view('master'); })->name('master');
Route::get('/home', function () { return view('master'); })->name('home');
Route::get('/dashboard', function (){ return view('dashboard'); })->name('dashboard');
Route::get('/play', function (){ return view('master'); })->name('play');
Route::get('/organize', function (){ return view('master'); })->name('organize');

Auth::routes();

// route to the activation system
$this->get('/verify-user/{code}', 'Auth\RegisterController@activateUser')->name('activate.user');

// named routes