<?php

use App\User;
use Faker\Core\Number;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurants = [
            [
                'name' => 'Ristorante Mudec - Enrico Bartolini',
                'img' => 'https://images.dissapore.com/wp-content/uploads/2019/11/1508320722349.jpg',
                'phone' => '02 84293701',
                'email' => 'info@ristorantecracco.it',
                'vat' => rand(1000000000, 99999999999),
                'password' => '3',
                'address' => 'Via Tortona 56, Milano (MI)',
                'slug' => ''
            ],
            [
                'name' => 'Mater Terrae',
                'img' => 'https://www.veganset.com/it/wp-content/uploads/sites/5/2018/04/Mater-Terrae-1.jpg',
                'phone' => '06 68283762',
                'email' => 'materterrae@ristorante.it',
                'vat' => rand(1000000000, 99999999999),
                'password' => '4',
                'address' => 'Largo Febo 2, Roma (RM)',
                'slug' => ''
            ],
            [
                'name' => 'Iyo',
                'img' => 'http://zero.eu/content/uploads/2016/01/iyo-ristorante-milano-crudi.jpg',
                'phone' => '02 45476898',
                'email' => 'booking@iyo-experience.com',
                'vat' => rand(1000000000, 99999999999),
                'password' => '1',
                'address' => 'Via Piero della Francesca 74, 20154 Milano (MI)',
                'slug' => ''
            ],
            [
                'name' => 'Masalchi',
                'img' => 'https://cdn.thelondoneconomic.com/wp-content/uploads/2022/02/f003b3f3-punjabi-samosa-chole-2.jpg',
                'phone' => '065 364102',
                'email' => 'info@masalchi.com',
                'vat' => rand(1000000000, 99999999999),
                'password' => '5',
                'address' => 'Via Londra 54, Bologna (BO)',
                'slug' => ''
            ],
        ];

        // foreach ($restaurants as $restaurant) {
        //     $data = new User();

        //     $data->name = $restaurant['name'];
        //     $data->img = $restaurant['img'];
        //     $data->phone = $restaurant['phone'];
        //     $data->email = $restaurant['email'];
        //     $data->vat = $restaurant['vat'];
        //     $data->password = $restaurant['password'];
        //     $data->address = $restaurant['address'];
        //     $data->slug = $restaurant['slug'];

        //     $data->save();

        foreach ($restaurants as $restaurant) {
            User::create([
                'name' => $restaurant['name'],
                'img' => $restaurant['img'],
                'phone' => $restaurant['phone'],
                'email' => $restaurant['email'],
                'vat' => $restaurant['vat'],
                'password' => $restaurant['password'],
                'address' => $restaurant['address'],
                'slug' => Str::of($restaurant['name'])->slug('-'),
            ]);
        }
    }
}
