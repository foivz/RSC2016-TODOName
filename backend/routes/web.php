<?php
/* API */
Route::group(["namespace" => "Api", "prefix" => "api"], function() {
    Route::get('quizes', 'QuizController@listAll');
    Route::get('teams', 'TeamsController@listAll');
    Route::get('events', 'EventsController@listAll');
});
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

Route::get('/admin', 'AdminLogin@index');

Route::post('/admin/login', 'AdminLogin@preLogin');
Route::get('/logout', 'AdminLogin@getLogout');


Route::resource('register', 'registerController');
Route::resource('admin-panel', 'adminPanelController');
Route::resource('quiz-administration', 'QuizAdministrationController');
Route::resource('quiz-questions', 'QuizQuestionsController');