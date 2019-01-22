<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Model\ShoppingCart ;
use Validator;
use Hash;
use Auth;
class UserApi extends Controller
{


      public function sociallogin(Request $request)
      {
            $rules =   [
                    'email'    => 'required|email',
                    'username' => 'required',
                    'provider' =>'required',
                       ];
            $validator     = Validator::make(request()->all(), $rules);
          if ($validator->fails()) 
          {
            return response(['status' => false, 'messages' =>$validator->errors(),'data'=>null]);
          }
        else
          {
            $user = User::where('email', $request->email)->first();
            if($user !== null)
            {
                $token=str_random(60).time();
                DB::table('users')->where('email', $request->email)->update(['api_token' => $token]);
                $user =  DB::table('users')->where('email', $request->email)->first();
               $totalcount= ShoppingCart::where('user_id','=',$user->id)->count();
               if( $request->lang == "en"){
                   return response(['status' => true,'messages' => ["success"=>[trans('api.loginsuccess')]],'data'=>['user'=>$user,'api_token'=>$user->api_token,'count'=>$totalcount]]);
               }else{
                   return response(['status' => true,'messages' => ["success"=>["تم تسجيل الدخول "]],'data'=>['user'=>$user,'api_token'=>$user->api_token,'count'=>$totalcount]]);
               }
              
            }
            else
            {
                     $user              = new User;
                     $user->name        = $request->username;
                     $user->email       = $request->email;
                     $user->level       ='user';
                     $user->status      = 1;
                     $user->provider    = $request->provider;
                     $user->api_token   = str_random(60);
                     $user->save();
                     
               if( $request->lang == "en"){
                   return response(['status' => true,'messages' => ["success"=>[trans('api.loginsuccess')]],'data'=>['user'=>$user,'api_token'=>$user->api_token]]);
               }else{
                   return response(['status' => true,'messages' => ["success"=>["تم تسجيل الدخول بنجاح"]],'data'=>['user'=>$user,'api_token'=>$user->api_token]]);
               }
            }
         }
      } 
      public function login(Request $request)
        {
            $rules =   [
                   
                    'email'    => 'required|email',
                    'password' => 'required',
                    ];
            $validator = Validator::make(request()->all(), $rules);
            if ($validator->fails()) 
            {
                
                return response(['status' => false, 'messages' => $validator->messages(),'data'=>null]);
            }
            else
            {
                    if ( auth()->attempt(['email' => request ('email') ,'password' => request ('password')]))
                    {
                      $token  = str_random(60).time();
                      DB::table('users')->where('email', $request->email)->update(['api_token' => $token]);
                      $user   =  DB::table('users')->where('email', $request->email)->first();
                       $totalcount= ShoppingCart::where('user_id','=',$user->id)->count();
                      if( $request->lang == "en"){
                            return response(['status' => true,'messages' => ["success"=>[trans('api.loginsuccess')]], "data"=>['user'=>$user,'api_token'=>$user->api_token,'count'=>$totalcount] ]);
                      }else {
                            return response(['status' => true,'messages' => ["success"=>["تم تسجيل الدخول بنجاح"]], "data"=>['user'=>$user,'api_token'=>$user->api_token,'count'=>$totalcount] ]);
                      }
                    }
                    else { 
                      if( $request->lang == "en"){
                          return response(['status' => false,  'messages' => ["error"=>[trans('api.loginerror')]], 'data' => null]);
                      }else {
                          return response(['status' => false,  'messages' => ["error"=>["البريد الإلكترونى او الرقم السرى غير صحيح"]], 'data' => null]);
                      }
                    }
            }
        }
    
        public function register(Request $request)
          {
                $rules =[
                        'name'      => 'required',
                        'email'     => 'required|email|unique:users',
                        'password'  => 'required|min:6',
                        ];
                $validator = Validator::make(request()->all(), $rules);
                if ($validator->fails())
                {
                    return response(['status' => false, 'messages' =>$validator->messages(),'data'=>null ]);
                }
                else
                {
                 $user              = new User;
                 $user->name        = $request->name;
                 $user->email       = $request->email;
                 $user->password    = Hash::make($request->password);
                 $user->level       = 'user';
                 $user->status      = 1;
                 $user->save();
                return response(['status' => true,'messages' => ["success" => [trans('api.registersuccess')]],'data' => null ]);
                }
          }
        
    

        public function updateuser(Request $request, $id)
         {
                $user = User::find($id);
                if ($user->api_token === $request->token && $user->api_token !== null ) 
                {
                        $rules = [
                            'name'             => 'required',
                            'email'            => 'required|email|unique:users,email,' . $id,
                            'current_email'    => 'required|email',
                            
                                 ];
                        $validator = Validator::make(request()->all(), $rules);
                          if ($validator->fails()) 
                          {
                            
                           return response(['status' => false, 'messages' => $validator->messages(),'data'=>null]);
                          } 
                          else
                          {
                            
                                if ( auth()->attempt(['email' => request ('current_email') ,'password' => request ('current_password')]) && $user->provider == null )
                                {
                                    $password=Hash::make($request->password);
                                    User::where('id', $id)->update(['name' => $request->name,'email'=>$request->email, 'password'=>$password, 'api_token'=>null]);
                                    return response(['status' => true,'messages' => ["success"=>[trans('api.updated')]],'data'=>null]);
                                } else
                                {
                                    return response(['status' => false, 'messages' => ["error" => [trans('api.passworddontmatch')]],'data'=>null]);
                                }
                               if ($user->provider !== null)
                                {
                                    
                                    User::where('id', $id)->update(['name' => $request->name,'email'=>$request->email]);
                                    return response(['status' => true,'messages' => ["success"=>[trans('api.updated')]],'data'=>null]);
                                } 
                                else
                                {
                                    return response(['status' => false, 'messages' => ["error" => [trans('api.pleaseloginagain')]],'data'=>null]);
                                }
                                
                          }
                        
                 } 
                 else 
                 {
                     return response(['status' => false, 'messages' => ["error"=>[trans('api.pleaseloginagain')]],'data'=>null]);
        
                 }
                
         }

    

    
          public function logout(Request $request)
           {
            $user            = User::where('id', $request->id)->first();
            $user->api_token = null;
            $user->save();
            return response(['status' => true,'messages' => ["success"=>[trans('api.logoutmessage')]],'data' => null]);
           }
    
    
    
    

}
