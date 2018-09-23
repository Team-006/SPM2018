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

Route::get('/form/i3', function () {
    return view('formi3');
});
Route::get('/form/i6', function () {
    return view('formi6');
});

//Route::get('/form/i1','FormsController@formI1');

Route::get('/form/i1', function () {
    return view('pages.form_i_1');
});
Route::get('/formi6Details','Formi6Controller@index');
Route::post('submitForm','Formi6Controller@store');
Route::get('/downloadPDF/{id}','Formi6Controller@downloadPDF');