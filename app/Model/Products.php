<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
   protected $table = 'products';
    protected $fillable =
        [
            'id',
            'en_title',
            'ar_title',
            'price',
            'photo',
            'user_id',
            'dep_id',
            'main_dep_id',
            'en_content',
            'ar_content',
            'size',
            'color',
        ];
   public function Depa()
    {

        return $this->belongsTo('App\Model\DepartmentProducts');

    }
       public function product_vendor()
    {

        return $this->belongsTo('App\User');

    }
         public function product_admin()
    {

        return $this->belongsTo('App\Admin');

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
       public function product_dep() {

        return $this->belongsTo('App\Model\DepartmentProducts', 'dep_id', 'id');
    }
          public function product_dep_main() {

        return $this->belongsTo('App\Model\DepartmentProducts', 'main_dep_id', 'id');
    }
    public function wishlist() {

        return $this->hasMany('App\Model\Wishlist', 'product_id', 'id');
    }


}
