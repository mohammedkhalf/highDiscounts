<?php
/**
 * |--------------------------------------------------------------------------
 * | Admin Routes
 * |-------------
 * Created by PhpStorm.
 * User: Mohamed Ragab
 * Date: 5/7/2018
 * Time: 5:47 PM
 */


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Config::set('auth.defines', 'admin');
    Route::get('login', 'AdminAuthController@login');
    Route::get('/recovery/password', 'AdminAuthController@forget_password');
    Route::post('/recovery/password', 'AdminAuthController@send_password');
    Route::post('login', 'AdminAuthController@dologin');
    Route::group(['middleware' => 'admin:admin'], function () {

        /*        Route::resource('admins','AdminController');*/

        Route::any('logout', 'AdminAuthController@logout');
        Route::get('/admins', 'AdminController@index');
        Route::get('/admins/create', 'AdminController@create');
        Route::post('/admins', 'AdminController@store');
        Route::get('/admins/edit/{id}', 'AdminController@edit');
        Route::post('/admins/update/{id}', 'AdminController@update');

        Route::get('/users/create', 'UserController@create');
        Route::get('/users', 'UserController@index');
        Route::post('/users', 'UserController@store');
        Route::get('/users/edit/{id}', 'UserController@edit');
        Route::post('/users/update/{id}', 'UserController@update');

        Route::get('/setting', 'SettingsController@index');
        Route::post('/setting', 'SettingsController@setting_save');
        Route::post('/users', 'UserController@store');
/*
        Route::get('/', function () {
            return view('front.homez3tr');
        });*/

        Route::get('lang/{lang}', function ($lang) {
            session()->has('lang') ? session()->forget('lang') : '';

            if ($lang == 'ar') {
                Session()->put('lang', 'ar');
            } else {
                Session()->put('lang', 'en');
            }

            return back();
        });
    });
});