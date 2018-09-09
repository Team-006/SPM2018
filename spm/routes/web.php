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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/formi3', function () {
    return view('formi3');
});


Route::get('/form/i1','FormsController@formI1');

Route::resource('f1','FormsController');
Route::get('create','FormsController@downloadWordDoc');
Route::post('store','FormsController@downloadWordDocStore');