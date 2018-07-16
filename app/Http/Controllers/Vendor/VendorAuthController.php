<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;

//use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\User;

class VendorAuthController extends  Controller
{
    public function login()
    {
        return view('vendor.login');
    }

    public function logout()
    {
        vendor()->logout();
        return redirect(aurl('login'));
    }

    public function forget_password()
    {
        return view('vendor.recovery');
    }

    public function send_password()
    {
        $vendorEmail = Vendor::where('email', request('email'))->frist();

        if (!empty($vendorEmail)) {
            $token = app('auth.password.broker')->createToken($vendorEmail);

        }
        return view('vendor.recovery');
    }

    public function dologin()
    {
        $rememberme = request('rememberme') == 1 ? true : false;
        if (vendor()->attempt(['email' => request('email'), 'password' => request('password')], $rememberme)) {
            return redirect('vendor');
        } else {
            Session()->flash('error', trans('vendor_incorect_login'));
            return redirect(aurl('login'));
        }
    }
}
