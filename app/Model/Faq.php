<?php
/**
 * Created by PhpStorm.
 * User: Corpy
 * Date: 7/29/2018
 * Time: 1:12 PM
 */

namespace App\Model;
use Illuminate\Database\Eloquent\Model;


class Faq extends Model
{
    protected $table = 'faq';
    protected $fillable =
        [
            'id',
            'en_question',
            'ar_question',
            'en_answer',
            'ar_answer',
        ];
}