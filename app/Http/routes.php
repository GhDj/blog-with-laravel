<?php

//@ini_set('display_errors', 'on');

// Authentication Routes...
Route::get('backend/login', 'Auth\AuthController@showLoginForm');
Route::post('backend/login', 'Auth\AuthController@login');
Route::get('backend/logout', 'Auth\AuthController@logout');




Route::group(['middleware' => 'auth'], function () {



    // Backend routes
    Route::group(['prefix' => 'backend', 'as' => 'backend::'], function(){


        // Main backend route
        Route::get('', 'BackendController@index');

        // Post routes
        Route::group(['prefix' => 'post', 'as' => 'post::'], function() {
            Route::get('', 'PostController@list_post');
            Route::get('create', 'PostController@create');
            Route::post('create', 'PostController@store');
            Route::get('edit/{id}', 'PostController@edit');
            Route::post('update/{id}', 'PostController@update');
            Route::get('delete/{id}', 'PostController@destroy');
        });
        // Category routes
        Route::group(['prefix' => 'categories', 'as' => 'categories::'], function() {
            Route::get('', 'CategoryController@index');
            Route::get('create', 'CategoryController@create');
            Route::post('create', 'CategoryController@store');
            Route::get('edit/{id}', 'CategoryController@edit');
            Route::post('update/{id}', 'CategoryController@update');
            Route::get('delete/{id}', 'CategoryController@destroy');
        });



        Route::group(['prefix' => 'users', 'as' => 'users::'], function (){
            Route::get('', 'UserController@index');
            Route::get('create', 'UserController@create');
            Route::post('create', 'UserController@store');
            Route::get('edit/{id}', 'UserController@edit');
            Route::post('update/{id}', 'UserController@update');
        });

        Route::group(['prefix' => 'settings', 'as' => 'settings::'], function () {
            Route::get('', 'SettingController@index');
            Route::post('save', 'SettingController@save');
        });
        Route::group(['prefix' => 'profile', 'as' => 'profile::'], function () {
            Route::get('', 'ProfileController@index');
        });


    });




});

// Public routes
Route::get('/', 'PostController@index');
Route::get('/p/{slug}', 'PostController@show');
Route::get('/c/{slug}', 'CategoryController@show');
Route::get('/t/{slug}', 'TagController@show');





Route::get('test', function () {
    return view('test');
});