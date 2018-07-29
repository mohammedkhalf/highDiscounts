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
    Route::group(['namespace' => 'Web'], function () {
    
        Route::get('/', 'HomeController@index');

        Route::get('/single_product/{id}', 'HomeController@single');

        Route::get('/allproducts','HomeController@products');
        Route::get('/alldepartments','HomeController@departments');

        Route::get('/singledep','HomeController@childDepartments');
        Route::get('/contactus','HomeController@contactus');
        Route::post('/insertcontactus','HomeController@addContact');

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
                return redirect('/');
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
    Route::group(['middleware' => ['UserMiddleware', 'auth']], function () {

    Route::group(['namespace' => 'Web'], function () {
        Route::get('/add-to-cart/{id}',[
            'uses' => 'HomeController@getAddToCart',
            'as' => 'product.addToCart',
        ]);
        Route::get('/shopping-cart', 'HomeController@getCart' );
        Route::delete('/destroy_item/{id}', 'HomeController@destroyitem');
        Route::get('/checkout', 'HomeController@checkout' );
        });
        Route::get('user', function () {
            return 'welcome user';
        });

    });

});

Route::get('maintenance', function () {
    if (sett()->status == 'open') {
        return redirect('/');
    } else {
        return view('soon');
    }
});

