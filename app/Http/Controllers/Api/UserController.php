<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $restaurants = User::all();

        return response()->json($restaurants);
    }

    public function show($slug)
    {

        $restaurants = User::where('slug', $slug)->first();

        $restaurants->load('dishes');
        
        return response()->json($restaurants);
    }
}
