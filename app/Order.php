<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name', 'surname', 'address', 'phone', 'email', 'total_price', 'dish_id'];

    public function dishes() {
        return $this->belongsToMany('App\Dish');
    }
}
