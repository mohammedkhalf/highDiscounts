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
   public function products_color()
    {
        return $this->hasMany('App\Model\ProductsColor', 'product_id', 'id');
    }
   public function products_size()
    {
        return $this->hasMany('App\Model\ProductsSize', 'product_id', 'id');
    }
}
