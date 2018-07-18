<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_items';

    protected $fillable =
        [
            'id',
            'product_id',
            'order_id',
            'order_item_status_code',
            'item_quantity',
            'item_price',
            'item_details',
        ];
}
