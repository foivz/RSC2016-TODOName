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

Route::get('/redirectFacebook', 'SocialAuthControllerFacebook@redirect');
Route::get('/callbackFacebook', 'SocialAuthControllerFacebook@callback');

Route::get('/redirectGoogle', 'SocialAuthControllerGoogle@redirect');
Route::get('/callbackGoogle', 'SocialAuthControllerGoogle@callback');
Route::get('/home', 'HomeController@index')
    ->name('home');

Route::resource('register', 'registerController');