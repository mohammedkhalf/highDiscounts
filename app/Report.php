<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'reports';
    protected $fillable =
    [
            'user_id',
            'vendor_id',
            'order_code',
            'message',
            'complain',

    ];    
}
