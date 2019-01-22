<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
   Mohamed Ragab

   middleware Middleware

    to check site statues
   7/17/2018
   */

/*Lang */
Route::get('lang/{lang}', function ($lang) {
    session()->has('lang') ? session()->forget('lang') : '';

    if ($lang == 'ar') {
        Session()->put('lang', 'ar');
    } else {
        Session()->put('lang', 'en');
    }

    return back();
});
//////// SingleTon Start
$singletonarray = [
    'at' => 'admin',
    'f' => 'front',
    'v' => 'vendor',
    'theme' => 'themes.master',
    'aurl' => 'admin',
    'language' => ['ar', 'en'],
];
foreach ($singletonarray as $key => $value) {
    app()->singleton($key, function () use ($value) {
        return $value;
    });
}



//////// SingleTon End
Route::group(['middleware' => 'Maintenance'], function () {
    Route::get('search_product','SearchController@searchName');

    Route::group(['namespace' => 'Web'], function () {
    
        Route::get('/', 'HomeController@index');

        Route::get('/single_product/{id}', 'HomeController@single');
        Route::get('/single_dep/{id}', 'HomeController@singledep');
         Route::post('/owner', 'HomeController@owner');
        Route::get('/allproducts','HomeController@products');
        Route::get('/faq','HomeController@faq');
        Route::get('/alldepartments','HomeController@departments');

        Route::get('/singledep','HomeController@childDepartments');
        Route::get('/productdepartment','HomeController@productDepartment');
        Route::get('/singleproduct','HomeController@singleProduct');

        Route::get('/contactus','HomeController@contactus');
        Route::POST('/insertcontactus','HomeController@addContact');
        Route::get('/aboutus','HomeController@aboutus');

           


    });

    Route::POST('/logout', 'SessionController@destroy');

    /*
    Mohamed Ragab

    7/17/2018
    */
    Route::get('/login', function () {
        if (isset(Auth::user()->id)) {
            return redirect('/');
        } else {
            return view('auth.login');
        }
    });
    Route::get('/register', function () {

        return view('auth.register');
    });  Route::get('/registervendor', function () {

        return view('auth.register_vendor');
    });

    Route::post('/register', 'SessionController@store');

    /*
    Mohamed Ragab

    to login and logout controller

    7/17/2018
    */

    Route::post('sessionstore', 'SessionController@sessionStore');

    /*
   Mohamed Ragab

   check login

   7/17/2018
   */


    Route::get('checklogin', array('as' => 'checklogin', function () {
        if (isset(Auth::user()->id) && Auth::user()->status == 1) {
            if (Auth::user()->level == 'vendor') {
                return redirect('/vendor/products');
            } elseif (Auth::user()->level == 'user') {
                return back();
            } else {
                auth()->logout();
                return redirect('/');
            }
        } else {
            auth()->logout();
            return redirect('/login')->with('fail', 'الحساب غير مفعل , برجاء فحص البريد الالكترونى لتفعيل الحساب');
        }
    }));

    /*
   Mohamed Ragab

   vendor Middleware

   7/17/2018
   */

    Route::group(['middleware' => ['VendorMiddleware', 'auth']], function () {

        Route::get('vendor', function () {
            return 'welcome vendor';
        });


    });

    /*
    Mohamed Ragab

    User Middleware

    7/17/2018
    */
    Route::group(['middleware' => ['UserMiddleware']], function () {

    Route::group(['namespace' => 'Web'], function () {
        Route::get('/add-to-cart/{id}',[
            'uses' => 'HomeController@getAddToCart',
            'as' => 'product.addToCart',
        ]);

        Route::get('/shopping-cart', 'HomeController@getCart' );
        Route::delete('/destroy_item/{id}', 'HomeController@destroyitem');

        
          Route::get('/wishlist/{id}',[
            'uses' => 'HomeController@addtowishlist',
            'as' => 'product.wishlist',
        ]);

        Route::Post('/add_to_wishlist_from_card/{id}' , 'HomeController@AddCardToWish');

        Route::delete('/destroy_item_from_wishlist/{id}', 'HomeController@DestroyItemFromWishlist');
        Route::get('/wishlist', 'HomeController@getWishlist' );


        Route::get('/track', 'HomeController@billing' );
        Route::post('/store_track', 'HomeController@track' );
       
        Route::get('/checkout', 'HomeController@checkout' );
        Route::get('/done', 'HomeController@done' );
        Route::post('/place', 'HomeController@PlaceOrder' );
        
        //khalaf
        Route::get('/profile' , 'HomeController@profile');
        Route::post('/update_profile' , 'HomeController@UpdateProfile');

        //khalaf
        Route::get('/helpCenter' , 'HomeController@help');
        Route::post('/send-complain' , 'HomeController@complain');

     
        
        }); //web

        Route::get('user', function () {
            return 'welcome user';
        });

    }); //UserMiddleware

});

Route::get('maintenance', function () {
    if (sett()->status == 'open') {
        return redirect('/');
    } else {
        return view('soon');
    }
});

Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');