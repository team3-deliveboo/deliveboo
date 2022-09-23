<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::middleware('auth')
    ->namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('home');
        // Route::get('/{user}/edit', 'UserController@edit')->name('users.edit');
        Route::resource('users', 'UserController');
        Route::resource('dishes', 'DishController');
        Route::resource('orders', 'OrderController');
        Route::resource('charts', 'ChartController');



    });

// Route::get('{any?}', function () {
// return view('frontend');
// })->where("any", ".*");