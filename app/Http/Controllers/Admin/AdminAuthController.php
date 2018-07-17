<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

//use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Admin;

class AdminAuthController extends  Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function logout()
    {
        admin()->logout();
        return redirect(aurl('login'));
    }

    public function forget_password()
    {
        return view('admin.recovery');
    }
<<<<<<< HEAD
=======

>>>>>>> 87a70e24ff9b3b758d0f2b66e18dbb09485aa49a

    public function send_password()
    {
        $adminEmail = Admin::where('email', request('email'))->frist();

        if (!empty($adminEmail)) {
            $token = app('auth.password.broker')->createToken($adminEmail);

        }
        return view('admin.recovery');
    }

    public function dologin()
    {
        $rememberme = request('rememberme') == 1 ? true : false;
        if (admin()->attempt(['email' => request('email'), 'password' => request('password')], $rememberme)) {
            return redirect('admin');
        } else {
            Session()->flash('error', trans('admin_incorect_login'));
            return redirect(aurl('login'));
        }
    }
}
