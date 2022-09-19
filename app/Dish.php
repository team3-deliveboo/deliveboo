<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = ['name', 'course', 'description', 'img', 'price', 'visibility', 'slug'];

    public function orders() {
        return $this->belongsToMany('App\Order', 'dish_order', 'dish_id', 'order_id');
    }

    
}
