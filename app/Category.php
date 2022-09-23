<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description', 'img'];

    public function users() {
        return $this->belongsToMany('App\User');
    }
}

