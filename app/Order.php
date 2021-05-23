<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 
        'total_money',
        'payment',
        'status',
        'name',
        'phone',
        'adress',
        'note',
    ];

    public function order_detail()
    {
        return $this->hasMany('App\Oder_detail','order_id');
    }
}
