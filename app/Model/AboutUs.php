<?php
/**
 * Created by PhpStorm.
 * User: Corpy
 * Date: 7/29/2018
 * Time: 1:12 PM
 */

namespace App\Model;
use Illuminate\Database\Eloquent\Model;


class AboutUs extends Model
{
    protected $table = 'aboutus';
    protected $fillable =
        [
            'id',
            'description',
            'image',
        ];
}