<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

    
     



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group([ 'namespace' => 'Api'], function () {

 	    Route::post('login','UserApi@login');
  		Route::post('register','UserApi@register');
  		Route::get('/', 'HomeController@index');
  		Route::get('/single_product/{id}', 'HomeController@single');
  		Route::get('/allproducts','HomeController@products');
 	    Route::get('/alldepartments','HomeController@departments');
 		Route::get('/singledep','HomeController@childDepartments');
        Route::get('/productdepartment','HomeController@productDepartment');
        Route::get('/singleproduct','HomeController@singleProduct');
        Route::get('/contactus','HomeController@contactus');
        Route::POST('/insertcontactus','HomeController@addContact');
        Route::get('/aboutus','HomeController@aboutus');

	});