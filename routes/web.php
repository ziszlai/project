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

//
//Route::get('about', function () {
//    return view('pages.about');
//});

Route::get('/', 'PagesController@home');

Route::get('about', 'PagesController@about');
Route::get('cards', 'CardsController@index');
Route::get('cards/{card}', 'CardsController@show');

//Route::get('cards/create', 'CardsController@create');
//Route::get('cards/1/edit', 'CardsController@edit');
//Route::put('cards/1', 'CardsController@update');
//Route::delete('cards/1', 'CardsController@destroy');
//Route::post('cards', 'CardsController@store');