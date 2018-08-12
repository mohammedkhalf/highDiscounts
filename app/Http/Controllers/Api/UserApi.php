<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Validator;
use Hash;
use Auth;
class UserApi extends Controller
{





    public function login(Request $request)
    {
        $rules =   [
               
                'email' => 'required|email',
                'password' => 'required',
            ];
        $validator = Validator::make(request()->all(), $rules);
        if ($validator->fails()) {
            return response(['status' => false, 'messages' => $validator->messages()]);
        }else{
        if ( auth()->attempt(['email' => request ('email') ,'password' => request ('password')])) {

        $user = Auth::user();

        $user->api_token = str_random(60);
        $user->save();
        return response(['status' => true, 'user' => $user, 'level' => $user->level, 'token' => $user->api_token , 'message' => trans('api.loginsuccess')]);
        }else{ 

       return response(['status' => false,  'message' => trans('api.loginerror')]);


            }
        }
    }
      public function register(Request $request)
    {
        $rules =   [
                'name'      => 'required',
                'email'    => 'required|email|unique:users',
                'password' => 'required|min:6',
                'level'    => 'required',
            ];
        $validator = Validator::make(request()->all(), $rules);
        if ($validator->fails()) {
            return response(['status' => false, 'messages' => $validator->messages()]);
        }else{
         $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->level = $request->level;
         if ($request['level'] == 'user') {
          $user->status = 1;
        }else{
         $user->status = 0;
        }
        $user->api_token = str_random(60);
        $user->save();

        return response(['status' => true, 'user' => $user, 'level' => $user->level,'token' => $user->api_token , 'message' => trans('api.registersuccess')]);
        }
    }

}
