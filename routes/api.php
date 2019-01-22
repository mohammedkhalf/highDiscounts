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

        Route::post('sociallogin','UserApi@sociallogin');
 	    Route::post('login','UserApi@login');
 	    Route::post('logout','UserApi@logout');
  		Route::post('register','UserApi@register');
  		Route::post('updateuser/{id}','UserApi@updateuser');
  		
  		
  		Route::get('/parentcategories','ProductsApi@categories');
  		Route::get('/subcategories/{id}','ProductsApi@subCategories');
  		Route::get('/productcategory/{id}','ProductsApi@productCategory');
  		Route::get('/products/{id}','ProductsApi@products');
    	Route::get('/singleproducts/{id}','ProductsApi@singleProducts');
    	Route::get('/brand','ProductsApi@brand');
    	Route::get('/latestproduct','ProductsApi@latestProduct');
    	Route::get('/onsale','ProductsApi@onSale');
    	Route::get('/featuredproduct','ProductsApi@featuredProduct');
  		Route::get('/recommendedproduct','ProductsApi@recommendedProduct');
  		Route::get('/mostliked','ProductsApi@mostLiked');
  		Route::get('/toprated','ProductsApi@topRated');
  		Route::get('/bestseller','ProductsApi@bestSeller');
  		Route::get('/slider','ProductsApi@slider');
  		Route::post('/search','ProductsApi@search');
  		Route::post('/addtocart','ProductsApi@addToCart');
  		Route::get('/getcart/{id}','ProductsApi@getcart');
  		Route::get('/getcartcount/{id}','ProductsApi@getcartcount');
  		Route::post('/destroyitemcart/{id}','ProductsApi@destroyItemCart');
  	    Route::post('/addtowishlist','ProductsApi@addToWishList');
  	    Route::get('/getwishlist/{id}','ProductsApi@getWishList');
  		Route::post('/destroyitemwishlist/{id}','ProductsApi@destroyItemWishList');
  		Route::post('/placeorder', 'ProductsApi@PlaceOrder' );
  		Route::get('/cities', 'HomeApi@cities' );
  		Route::get('/myorders/{id}', 'ProductsApi@myOrders' );
  		Route::get('/myordersitems/{id}', 'ProductsApi@myOrdersItems' );
  		Route::post('/track','ProductsApi@track');
  		Route::get('/contactus','HomeApi@contactus');
  		Route::get('/aboutus','HomeApi@aboutus');
        Route::post('/error','ProductsApi@handle');
//   			Route::get('/', 'HomeApi@categories');
//   		Route::get('/single_product/{id}', 'HomeApi@single');
//   		Route::get('/allproducts','HomeApi@products');
//  	    Route::get('/alldepartments','HomeApi@departments');
//  		Route::get('/singledep','HomeApi@childDepartments');
//         Route::get('/productdepartment','HomeApi@productDepartment');
//         Route::get('/singleproduct','HomeApi@singleProduct');
        
//         Route::POST('/insertcontactus','HomeApi@addContact');
         
	});
	
	//home api
	