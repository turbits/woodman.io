<?php
////////// WEB ROUTES //////////
Route::get('/about', 'PageController@getAbout');
Route::post('/contact', 'PageController@postContact');
Route::get('/contact', 'PageController@getContact');
Route::get('/', 'PageController@getIndex');
Route::resource('posts', 'PostController');
