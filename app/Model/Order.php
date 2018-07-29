<?php

namespace App\Model;
//use App\User;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable =
        [
            'id',
            'user_id',
            'country_id',
            'name',
            'address',
            'email',
            'phone',
            'price',
        ];
    public function user()
{
    return $this->belongsTo('App\User','user_id','id' );
}
}
