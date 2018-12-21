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


use App\User;
use App\Quote;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/create/{text}', function($text){

    $user = User::findOrFail(1);

    $quote = new Quote(['text'=>$text, 'url'=>'http://google.com']);

    $user->quotes()->save($quote);

    return $quote->id;
});

Route::resource('quotes', 'QuotesController');

Route::get('/quotes/create/{text?}/{url?}', 'QuotesController@create')->where('url', '.*');