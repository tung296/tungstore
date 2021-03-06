<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name', 
        'slug',
        'index',
    ];
    public function product()
    {
        return $this->hasMany('App\Product');
    }
}
