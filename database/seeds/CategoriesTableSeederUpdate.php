<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeederUpdate extends Seeder
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
                'img' => 'stellato.png',
            ],
            [
                'name' => 'italiano',
                'img' => 'italiano.png',
            ],
            [
                'name' => 'tailandese',
                'img' => 'tailandese.png',
            ],
            [
                'name' => 'asiatico',
                'img' => 'asiatico.png',
            ],
            [
                'name' => 'vegetale',
                'img' => 'vegetale.png',
            ],
            [
                'name' => 'carne',
                'img' => 'carne.png',
            ],
            [
                'name' => 'pesce',
                'img' => 'pesce.png',
            ],
            [
                'name' => 'messicano',
                'img' => 'messicano.png',
            ],
            [
                'name' => 'crostacei',
                'img' => 'crostacei.png',
            ],
            [
                'name' => 'molecolare',
                'img' => 'molecolare.png',
            ],
            [
                'name' => 'dessert',
                'img' => 'dessert.png',
            ],
            [
                'name' => 'pasta',
                'img' => 'pasta.png',
            ],
            [
                'name' => 'cocktail',
                'img' => 'cocktail.png',
            ],
            [
                'name' => 'vino',
                'img' => 'vino.png',
            ],
            [
                'name' => 'insalate',
                'img' => 'insalate.png',
            ],
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'img' => $category['img'],
            ]);
        }
    }
}
