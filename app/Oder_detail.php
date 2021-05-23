<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oder_detail extends Model
{
    protected $fillable = [
        'order_id', 
        'product_id',
        'qty',
    ];
    public function product()
    {
        return $this->hasOne('App\Product','id','product_id');
    }
}
