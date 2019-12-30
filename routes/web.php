<?php
 Route::get('/home', function () {
     return view('route/index');
 });
Route::get('/eiyo','EiyoController@index');
Route::post('/eiyo','EiyoController@add');
 Route::get('/eiyo/date','EiyoController@show');
