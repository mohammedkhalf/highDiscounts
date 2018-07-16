<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    public function Depa()
    {

        return $this->belongsTo('App\Model\DepartmentProducts');

    }
      public function products_gallary()
    {
        return $this->hasMany('App\Model\ProductsGallary', 'product_id', 'id');
    }
}
