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

Route::get('/','HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('pages')->group(function(){
    Route::get('welcome', 'PagesController@welcome')->name('welcome')->middleware('auth');
    Route::get('quizcode', 'PagesController@quizcode')->name('quizcode')->middleware('auth');
    Route::post('quizcode', 'PagesController@fetchquiz')->name('quizcode')->middleware('auth');
    Route::get('takequiz', 'PagesController@takequiz')->name('takequiz')->middleware('auth');
    Route::get('ajax/fetchquizpage', 'PagesController@fetchquizpage')->name('fetchquizpage');
    Route::get('profile', 'PagesController@profile')->name('profile');
    Route::post('profile', 'PagesController@updateprofile')->name('updateprofile');
});

Route::prefix("pages/admin")->middleware(['is_admin'])->group(function(){
    Route::get('index', 'AdminController@index')->name('adminindex');
});
