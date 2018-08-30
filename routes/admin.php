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

   //////// SingleTon Start
    $singletonarray = [
        'at'=>'admin',
        'f'=>'front',
        'v'=>'vendor',
        'theme'=>'themes.master',
        'aurl'=>'admin',
        'language'=>['ar','en'],
    ];
    foreach($singletonarray as $key => $value)
    {
        app()->singleton($key,function() use ($value){
            return $value;
        });
    }

//////// SingleTon End
Route::group(['prefix' => 'vendor', 'namespace' => 'Vendor'], function () {
    Route::group(['middleware' => ['VendorMiddleware', 'auth']], function () {

        Route::POST('/logout', 'SessionController@destroy');

        Route::resource('products','ProductsController');
        Route::delete('products/destroyimage/{id}', 'ProductsController@destroyimage');
        Route::delete('products/destroysize/{id}', 'ProductsController@destroysize');
        Route::delete('products/destroycolor/{id}', 'ProductsController@destroycolor');
        Route::resource('department_product','DepProductController');
        Route::post('department_product/check/parent','DepProductController@check_parent');
        Route::get('/orders','OrderController@index');
        Route::post('/orders/status/{id}','OrderController@status');
     });
    });


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {






    Config::set('auth.defines', 'admin');
    Route::get('login', 'AdminAuthController@login');
    Route::get('/recovery/password', 'AdminAuthController@forget_password');
    Route::post('/recovery/password', 'AdminAuthController@send_password');
    Route::post('login', 'AdminAuthController@dologin');

    Route::group(['middleware' => 'admin:admin'], function () {
        Route::get('/', 'AdminController@admin');

        /*        Route::resource('admins','AdminController');*/

        Route::get('import-export-csv-excel','ExeclController@importExportExcelORCSV');
        Route::post('import-csv-excel','ExeclController@login');


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

        Route::get('/countries/create', 'CountriesController@create');
        Route::get('/countries', 'CountriesController@index');
        Route::post('/countries', 'CountriesController@store');
        Route::get('/countries/edit/{id}', 'CountriesController@edit');
        Route::post('/countries/update/{id}', 'CountriesController@update');

        Route::get('/countries/cities/{id}', 'CountriesController@show');

        Route::resource('slider','SliderController');
        Route::resource('department_product','DepProductController');
        Route::post('department_product/check/parent','DepProductController@check_parent');
       
        Route::resource('products','ProductsController');
        Route::post('products/check/parent','ProductsController@check_parent');
        Route::delete('products/destroyimage/{id}', 'ProductsController@destroyimage');
        Route::delete('products/destroysize/{id}', 'ProductsController@destroysize');
        Route::delete('products/destroycolor/{id}', 'ProductsController@destroycolor');
        Route::get('/setting', 'SettingsController@index');
        Route::post('/setting', 'SettingsController@setting_save');
        Route::post('/users', 'UserController@store');


        ////order///
        Route::get('/orders','OrderController@index');
        Route::get('/orders/details/{id}','OrderController@details');
        Route::post('/orders/status/{id}','OrderController@status');

        ////contactus
        Route::get('/allcontact','AdminController@allContact');
        Route::get('/deletecontact/{id}','AdminController@deleteContact');

        ///aboutUs
        Route::get('/updateabout','AdminController@updateAboutUs');
        Route::post('/editabout','AdminController@editAbout');

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