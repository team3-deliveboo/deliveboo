<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/users", "Api\UserController@index");
Route::get('/users/{slug}', "Api\UserController@show");
Route::get('/dishes', 'Api\DishController@index');
Route::get('/categories', 'Api\CategoryController@index');
Route::get('orders/generate', 'Api\Orders\OrderController@generate');
Route::post('orders/make/payment', 'Api\Orders\OrderController@makePayment');