<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DepartmentProducts extends Model
{
    protected $table = 'department_products';
       protected $fillable =
        [
            'id',
            'en_name',
            'ar_name',
            'image',
            'parent',
        ];
  
}