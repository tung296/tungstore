<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id', 
        'product_id',
        'qty',
    ];

    public function user()
    {
    	return $this->belongsto('App\User');
    }

    public function product()
    {
        return $this->hasOne('App\Product','id','product_id');
    }
}
