<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name', 
        'slug',
        'import_price',
        'price',
        'amount',
        'sold_amount',
        'sku',
        'des',
        'parameter',
        'summary',
        'status',
        'images',
        'category_id',
    ];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function cart()
    {
        return $this->belongsTo('App\Cart');
    }
}
