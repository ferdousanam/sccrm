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

Route::get('client-congrats', 'FrontEndCon\HomeController@congrats')->name('client-congrats');
Route::group(['as' => 'user.'], function () {
    Route::resource('/', 'FrontEndCon\HomeController');
});
// Turned off Register Routes
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);
// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
