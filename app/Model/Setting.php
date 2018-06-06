<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = "Settings";
    protected $fillable =
        [
            'id',
            'sitename_ar',
            'sitename_en',
            'logo',
            'icon',
            'email',
            'main_lang',
            'description',
            'keywords',
            'status',
            'message_mentenance',
        ];
}
