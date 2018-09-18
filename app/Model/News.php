<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
     protected $fillable =
        [
            'id',
            'en_title',
            'ar_title',
            'dep_id',
            'user_id',
            'en_content',
            'ar_content',
            'photo',
        ];
    
}
