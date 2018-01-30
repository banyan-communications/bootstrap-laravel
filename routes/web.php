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

// Route::get('/welcome', function () {
//     return view('welcome');
// });


Route::get('/','TemplatesController@index');

Route::get('/templates','TemplatesController@index');

Route::get('/templates/create','TemplatesController@create');

Route::post('/templates','TemplatesController@store');

Route::get('/templates/{template}','TemplatesController@show');

Route::get('/training','TrainingController@index');

Route::get('/training/{training}','TrainingController@show');
