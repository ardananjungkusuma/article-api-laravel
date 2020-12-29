<?php

Route::namespace('Auth')->group(function () {
    Route::post('register', 'RegisterController');
    Route::post('login', 'LoginController');
    Route::post('logout', 'LogoutController');
});

Route::namespace('Article')->middleware('auth:api')->group(function () {
    Route::post('create-article', 'ArticleController@store');
});

Route::get('article/{article}', 'Article\ArticleController@show');
Route::get('article', 'Article\ArticleController@index');


Route::get('user', 'UserController');
