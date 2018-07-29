<?php
/**
 * Created by PhpStorm.
 * User: Corpy
 * Date: 7/26/2018
 * Time: 6:31 PM
 */

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table = 'contactus';
    protected $fillable =
        [

            /* 	 	created_at 	updated_at */
            'id',
            'name',
            'email',
            'subject',
            'message',
        ];

}