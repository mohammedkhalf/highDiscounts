<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table = 'countries';
    protected $fillable =
        [
            'countery_id',
            'price',
        ];
    
        public function countries ()
        {
            return $this->belongsTo('App\Model\Countery' , 'countery_id');
        }

}
