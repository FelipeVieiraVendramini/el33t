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

// index
Route::get('/', 'HomeController@loadIndex')->name('master');
Route::get('/home', 'HomeController@loadIndex')->name('home');

Route::get('/dashboard', function (){ return view('dashboard', ['routeName' => 'dashboard']); })->name('dashboard');
Route::get('/login', function (){ return view('master', ['routeName' => 'login']); })->name('login');

// play redirections
Route::get('/play', 'HomeController@loadPlay')->name('play');
Route::get('/play/{search}', 'HomeController@loadPlay');
Route::get('/play/{search}/{page}', 'HomeController@loadPlay');

// organize
Route::get('/organize', function (){ return view('master', ['routeName' => 'organize']); })->name('organize');

// tournament
Route::get('/tournament/create/{id}', 'Tournaments@continueTournamentCreation')->name('tournament.create');

// register new tournament
Route::post('/organize/get/platform', 'Tournaments@getPlatformPerGame')->name('getPlatformPerGame');
Route::post('/organize/create-new', 'Tournaments@createNew')->name('registertournament');

Auth::routes();