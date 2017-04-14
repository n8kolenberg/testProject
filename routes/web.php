<?php


Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');



Route::get('/dicks', 'DicksController@index')->name('home');
Route::get('/dicks/create', 'DicksController@create');
Route::post('/dicks', 'DicksController@store');



Route::get('/dicks/{dick}', 'DicksController@show');
Route::post('/dicks/{dick}/balls', 'BallsController@store');


Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@authenticate');
Route::get('/logout', 'SessionsController@destroy');


