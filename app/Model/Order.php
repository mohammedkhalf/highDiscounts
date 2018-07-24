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
            'order_status_code',
            'order_details',
        ];
    public function user()
{
    return $this->belongsTo('App\User','user_id','id' );
}
}
