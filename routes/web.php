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
    Auth::routes();*/
Route::POST('/logout', 'SessionController@destroy');

Route::get('/login', function () {
    if (isset(Auth::user()->id)) {
        return redirect('/');
    }else{
        return view('auth.login');
    }
});

Route::group(['middleware' => 'Maintenance'], function () {

    Route::get('/', function () {
        return view('front.home');
    });

    Route::post('sessionstore', 'SessionController@sessionStore');
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
        Route::get('/login' , function (){
            return view('front.home');
        });*/

});

Route::get('maintenance', function () {
    if (sett()->status == 'open') {
        return redirect('/');
    } else {
        return view('soon');
    }
});


Route::get('/home', 'HomeController@index')->name('home');
