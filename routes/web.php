<?php
// auth routes
Route::get('auth/login', ['uses' => 'Auth\LoginController@showLoginForm', 'as' => 'login']);
Route::post('auth/login', 'Auth\LoginController@login');
Route::get('auth/logout', ['uses' => 'Auth\LoginController@logout', 'as' => 'logout']);

// registration routes
Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('auth/register', 'Auth\RegisterController@register');

// password reset routes
Route::get('password/reset/{token?}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');

//// web routes ////
Route::resource('posts', 'PostController');
Route::get('/', 'PageController@getHome');
Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
Route::get('blog/{slug}', [ 'uses' => 'BlogController@getSinglePost', 'as' => 'blog.post'])->where('slug', '[\w\d\-\_]+');
Route::get('about', 'PageController@getAbout');
Route::get('portfolio', 'PageController@getPortfolio');
Route::get('contact', 'PageController@getContact');
Route::post('contact', 'PageController@postContact');
Route::get('support', 'PageController@getSupport');
