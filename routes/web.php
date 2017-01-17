<?php

class Mailer {
    public function __construct() {

    }
}

class RegistersUsers {
    protected $mailer;

    // Constructor dependency injection
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
}

// App::bind
// You don't always have to declare this, if it can be automatically resolved it will
// Don't forget to typehint
// Can be done on the controller level just by typehinting: RegistersUsers $registration
// Request $request
App::singleton('RegistersUsers', function () {
    return new RegistersUsers(new Mailer);
});

//var_dump(App::make('foo'));
$one = app('RegistersUsers');
$two = app('RegistersUsers');

/*var_dump($one);
var_dump($two);*/

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

Route::post('cards/{card}/notes', 'NotesController@store');
Route::get('notes/{note}/edit', 'NotesController@edit');
Route::patch('notes/{note}', 'NotesController@update');

//Route::get('cards/create', 'CardsController@create');
//Route::get('cards/1/edit', 'CardsController@edit');
//Route::put('cards/1', 'CardsController@update');
//Route::delete('cards/1', 'CardsController@destroy');
//Route::post('cards', 'CardsController@store');
Auth::routes();

Route::get('/dashboard', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::get('begin', function () {
    flash('You are now signed in!');
    //Session::flash('status', 'hello there');
    session(['foo' => 'bar']); // Session::put('foo', 'bar')'
    // Session::get('foo'); session('foo');
    return redirect('/');
    //Redirect::to('/')
});

// Typehintered dependency
Route::get('/', function(RegistersUsers $registration) {
    //var_dump($registration);
    //return view('welcome');
});