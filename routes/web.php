<?php


Route::group(['prefix' => 'web', 'namespace' => 'Web'], function () {
    Route::resource('vendorp','ProductsController');
  });
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

Route::group(['middleware' => 'Maintenance'], function () {

    Route::get('/', function () {
        return view('front.home');
    });
    /*
    Auth::routes();*/

    /*
    Mohamed Ragab
    Logout
    7/17/2018
    */

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
                return redirect('/');
            } elseif (Auth::user()->u_type == 'user') {
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


Route::get('/home', 'HomeController@index')->name('home');
