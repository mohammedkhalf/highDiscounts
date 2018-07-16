<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DepartmentProducts extends Model
{
    protected $table = 'department_products';
     public function product() {

        return $this->hasMany('App\Model\Products', 'dep_id');
    }
}