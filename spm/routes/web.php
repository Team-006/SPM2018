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

<<<<<<< HEAD
Route::get('/login', 'UsersController@login');
ROute::get('/register', 'UsersController@register');
Route::post('/insertUser', 'UsersController@insert');
=======

Auth::routes();

>>>>>>> samith
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/form/i3', function () {
    return view('formi3');
});
Route::get('/form/i5', function () {
    return view('formi5');
});
Route::get('/form/i6', function () {
    return view('formi6');
});
// Route::get('/form/i3', function () {
//     return view('formi3');
// });

//Route::get('/form/i1','FormsController@formI1');

// Route::get('/form/i1', function () {
//     return view('pages.form_i_1');
// });
Route::get('/form/i1','DocumentController@create');
Route::post('store','DocumentController@store');

Route::get('/formi6Details','Formi6Controller@index');
Route::post('submitForm','Formi6Controller@store');
Route::get('/downloadPDF/{id}','Formi6Controller@downloadPDF');
Route::resource('progress','ProgressController');

