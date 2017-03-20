<?php


Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');



Route::get('/dicks', 'DicksController@index');
Route::get('/dicks/create', 'DicksController@create');
Route::post('/dicks', 'DicksController@store');



Route::get('/dicks/{dick}', 'DicksController@show');

Route::post('/dicks/{dick}/balls', 'BallsController@store');

