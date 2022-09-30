<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'stellato',
                'description' => '',
                'img' => '',
            ],
            [
                'name' => 'italiano',
                'description' => '',
                'img' => '',
            ],
            [
                'name' => 'giapponese',
                'description' => '',
                'img' => '',
            ],
            [
                'name' => 'asiatico',
                'description' => '',
                'img' => '',
            ],
            [
                'name' => 'vegetariano',
                'description' => '',
                'img' => '',
            ],
            [
                'name' => 'vegano',
                'description' => '',
                'img' => '',
            ],
            [
                'name' => 'carne',
                'description' => '',
                'img' => '',
            ],
            [
                'name' => 'pesce',
                'description' => '',
                'img' => '',
            ],
            [
                'name' => 'francese',
                'description' => '',
                'img' => '',
            ],
            [
                'name' => 'fusion',
                'description' => '',
                'img' => '',
            ],
            [
                'name' => 'molecolare',
                'description' => '',
                'img' => '',
            ],
            [
                'name' => 'pizza',
                'description' => '',
                'img' => '',
            ],
            [
                'name' => 'pasta',
                'description' => '',
                'img' => '',
            ],
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'description' => $category['description'],
                'img' => $category['img'],
            ]);
        }
    }
}

// stellato, italiano, giapponese, asiatico, vegetariano, vegano, carne, pesce, francese, fusion, molecolare, pizza, pasta
