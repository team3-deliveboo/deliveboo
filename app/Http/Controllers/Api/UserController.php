<?php

namespace App\Http\Controllers\Api;

use App\Dish;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function filterUser(Request  $request)
    {
        dd($request);
    }
    public function index()
    {
        $restaurants = User::all();
        $restaurants->load('dishes');
        $restaurants->load('categories');

        return response()->json($restaurants);
    }

    public function show($slug)
    {

        $restaurants = User::where('slug', $slug)->first();


        $restaurants->dishes = Dish::where('user_id', $restaurants->id)->get();


        return response()->json($restaurants);
    }
}
