<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Authentication Routes...
Route::get('/login', 'LoginController@showLoginForm')->name('login');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout')->name('logout');

// Registration Routes...
Route::get('/register', 'RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'RegisterController@register');

// Password Reset Routes...

Route::post("password/email", 'ForgotPasswordController@sendResetLinkEmail');
Route::get("password/reset", 'ForgotPasswordController@showLinkRequestForm')->name('reset');
Route::post("password/reset", 'ResetPasswordController@reset');
Route::get("password/reset/{token?}", 'ResetPasswordController@showResetForm');