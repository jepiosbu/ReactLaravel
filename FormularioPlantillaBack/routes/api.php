<?php
use\App\Http\Controllers\AutoController;
use Illuminate\Http\Request;

Route::apiResource('autos', 'AutoController');


// Route::get('/autos', 'AutoController@index');
// Route::post('/auto', 'AutoController@store');
// Route::get('/auto{id}', 'AutoController@show');
// Route::put('/auto{id}', 'AutoController@update');
// Route::delete('/auto{id}', 'AutoController@destroy');
