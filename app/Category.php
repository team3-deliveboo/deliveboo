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

// DALLA REPO DEGLI ALTRI

// class Category extends Model
// {
//     protected $fillable = [
//         'name',
//         'image',
//         'created_at',
//         'updated_at',
//     ];

//     public function users()
//     {
//         return $this->belongsToMany('App\User')
//             ->withPivot('user_id', 'category_id')
//             ->withTimestamps();
//     }
// }
