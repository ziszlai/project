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
    return 'Hi there';
    //return view('welcome');
});

Route::get('about', function () {
    return view('pages.about');
    //return view('welcome');
});


//Route::get('/about', 'PagesController@home');