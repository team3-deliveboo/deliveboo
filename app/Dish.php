<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = ['name', 'course', 'description', 'img', 'price', 'visibility', 'slug'];
}
