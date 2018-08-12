<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Model\Order;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
  protected $table = 'users';
  
    protected $fillable = [
      'id',  'name', 'email', 'password','api_token','level',
    ];

    protected $hidden = [
        'password', 'remember_token','api_token',
    ];
//    public function order()
//    {
//        return $this->hasOne(' App\Model\Order', 'user_id', 'id');
//    }
}
