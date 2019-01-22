<?php
/**
 * Created by PhpStorm.
 * User: Mohamed Ragab
 * Date: 5/8/2018
 * Time: 4:32 PM
 */
if (!function_exists('aurl')) {
    function aurl($url = null)
    {
        return url('admin/' . $url);
    }
}
if (!function_exists('v')) {
    function v($url = null)
    {
        return url('v/' . $url);
    }
}

if (!function_exists('sett')) {
    function sett()
    {
        return \App\Model\Setting::orderBy('id', 'desc')->first();
    }
}

if (!function_exists('lang')) {
    function lang()
    {
        if (session()->has('lang')) {
            return session('lang');
        } else {
            return sett()->main_lang;
        }
    }
}


if (!function_exists('dirction')) {
    function dirction()
    {
        if (session()->has('lang')) {
            if (session('lang') == 'ar') {
                return 'rtl';
            } else {
                return 'ltr';
            }
        } else {
            return 'ltr';
        }
    }
}

if (!function_exists('admin')) {
    function admin()
    {
        return auth()->guard('admin');
    }
}

/*********validation helper function************/

if (!function_exists('v_image')) {
    function v_image($ext=null)
    {
        if ($ext === null){
            return 'image|mimes:jpg,jpeg,png,gif';
        }else{
            return 'image|mimes:'.$ext;
        }
    }
}

/*********validation helper function************/

if (!function_exists('responses'))
{
    function responses($status=null, $messages=null,$data=null)
    {
       return ['status' => $status,  'messages' => $messages, 'data'=>$data];
          
    }
}
