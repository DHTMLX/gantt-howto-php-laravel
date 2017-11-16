<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/data', 'GanttController@get');

Route::resource('task', 'TaskController');
Route::resource('link', 'LinkController');
