<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable =
        [
            'id',
            'customer_id',
            'order_status_code',
            'order_details',
        ];
}
