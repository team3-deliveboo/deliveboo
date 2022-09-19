# deliveboo

composer create-project --prefer-dist laravel/laravel:^7.0 deliveboo

npm install

composer require laravel/ui:^2.4

php artisan ui vue --auth

php artisan migrate

php artisan make:model -m NomeAlSingolare

php artisan migrate:rollback

php artisan make:seeder UsersTableSeeder / DishesTableSeeder / CategoriesTableSeeder

php artisan db:seed --class UsersTableSeeder

php artisan make:controller --resource UserController //CRUD

composer dump-autoload

php artisan make:migration create_user_category_table



<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function posts($id)
    {
        $category = Category::findOrFail($id);

        return $category->posts;
    }
}

