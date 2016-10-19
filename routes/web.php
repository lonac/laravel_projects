<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

 //home
Route::get('/','PagesController@home');

//about
Route::get('/about','PagesController@about');

//navbar
Route::get('/contact','PagesController@contact');

//weeekly timetable
Route::get('/weekly','PagesController@weekly');


//church details
Route::get('/churchdet','PagesController@churchdet');


//events
Route::get('/event','PagesController@event');

//
Auth::routes();

//for registrations
Route::get('users/register', 'Auth\RegisterController@showRegistrationForm');

Route::post('users/register', 'Auth\RegisterController@register');

//for login
Route::get('users/login', 'Auth\LoginController@showLoginForm');

Route::post('users/login', 'Auth\LoginController@login');

Route::get('home', 'HomeController@index');
