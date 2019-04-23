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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', function () {
    return view('services');
});
Route::get('/mission_statement', function () {
    return view('mission_statement');
});
Route::get('/our_team', function () {
    return view('our_team');
});
Route::get('/financing', function () {
    return view('financing');
});
Route::get('/choosing_your_sign', function () {
    return view('choosing_your_sign');
});
Route::get('/led_bulb_types', function () {
    return view('led_bulb_types');
});
Route::get('/water_proofing', function () {
    return view('water_proofing');
});

