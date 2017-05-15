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

Route::resource('movies', 'MoviesController');
Route::get('movies/{id}/reviews', 'MoviesController@showReviews');
Route::post('movies/{id}/reviews', 'MoviesController@storeReview');
Route::post('movies/search', 'MoviesController@search');
