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

Route::get('/posts','PostController@index');
Route::get('/menu','SoccerController@menu');
Route::get('/m','PostController@m');
//Route::get('/PL','SoccerApiController@rank')->name('Sc.premier');
Route::get('/{league}/rank','SoccerApiController@rank')->name('rank');
Route::get('/{league}/score','SoccerApiController@score')->name('score');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('posts','SoccerController',['only'=>['index','show','create']]);
//Route::get('posts/edit{id}','SoccerController@edit');
//Route::post('posts/edit{id}','SoccerController@update');
