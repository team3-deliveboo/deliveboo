<?php

use App\Dish;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dishes = [
            [
                'name' => 'Filetto di vacca podolica in osso',
                'course' => 'Secondo',
                'description' => '',
                'img' => '',
                'price' => 45.00,
                'visibility' => true,
                'slug' => ''
            ],
            [
                'name' => 'Spaghettone trafilato al bronzo, anguilla affumicata e calamaretti spillo',
                'course' => 'Primo',
                'description' => '',
                'img' => 'https://www.gourmet-magazin.de/fileadmin/_processed_/b/2/csm_spaghetti-gourmet-2_62f64494a8.jpg',
                'price' => 35.00,
                'visibility' => true,
                'slug' => ''
            ],
            [
                'name' => 'Risotto alle rape rosse e salsa gorgonzola "Evoluzione"',
                'course' => 'Primo',
                'description' => '',
                'img' => 'https://img2.striscialanotizia.mediaset.it/bin/news/84.$plit/C_20_news_10361_copertina.png',
                'price' => 35.00,
                'visibility' => true,
                'slug' => ''
            ],
            [
                'name' => 'Zabaione tradizionale, gelato al pistacchio di Bronte e albero di arance',
                'course' => 'Dolce',
                'description' => '',
                'img' => 'https://media-cdn.tripadvisor.com/media/photo-s/1a/39/ac/58/ristorante-enrico-bartolini.jpg',
                'price' => 18.00,
                'visibility' => true,
                'slug' => ''
            ],
            [
                'name' => 'Omaggio a Bibliothè',
                'course' => '',
                'description' => 'Dadolata di verdure alla russa e insalata variopinta, completate da buoni carciofi, pomodori confit e una foglia di shiso in tempura, citronette ai lamponi.',
                'img' => 'http://ilcuoreincucina85.altervista.org/alterpages/white_background.jpg',
                'price' => 28.00,
                'visibility' => true,
                'slug' => ''
            ],
            [
                'name' => 'Fratello Sole',
                'course' => '',
                'description' => 'Gazpacho di melone con spuma di gorgonzola, contrasto di aceto balsamico.',
                'img' => 'https://i.pinimg.com/originals/fb/a0/3c/fba03cac79496e9f80eab94f354be0ed.jpg',
                'price' => 28.00,
                'visibility' => true,
                'slug' => ''
            ],
            [
                'name' => 'L’Ombelico del Mondo',
                'course' => '',
                'description' => 'Risotto con funghi porcini e zafferano biodinamico di Calabria, mantecatura di cavolfiori e riso soffiato selvaggio.',
                'img' => 'https://www.cucina-naturale.it/wp-content/uploads/2021/02/risotto-funghi-nocciole-rosmarino-750x1024.jpg',
                'price' => 36.00,
                'visibility' => true,
                'slug' => ''
            ],
            [
                'name' => 'Sguardo alla buona tradizione italiana',
                'course' => '',
                'description' => 'Tagliolino alla chitarra alla carbonara, con verdure delicatamente arrostite, tofu affumicato e parmigiano.',
                'img' => 'https://d3lp4xedbqa8a5.cloudfront.net/s3/digital-cougar-assets/gt/2020/03/12/1583975783351_weburchin.jpg?width=690&height=&mode=crop&quality=75',
                'price' => 36.00,
                'visibility' => true,
                'slug' => ''
            ],
            [
                'name' => 'Spaghetti alla tsukemen con pollo e polpo',
                'course' => 'primi',
                'description' => 'Questa è una pasta che sono solita fare quando mi avanza del polpo lessato, anzi, siccome mi piace molto, quando decido di mangiare il polpo, abbondo sempre nella quantità in modo che possa avanzare.',
                'img' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fblog.giallozafferano.it%2Ffrancescapassionecucina%2Fwp-content%2Fuploads%2F2018%2F06%2F3CD2DC46-C60B-424B-82E9-5195129F1E4E-e1529558600370.jpeg&f=1&nofb=1',
                'price' => 35.00,
                'visibility' => true,
                'slug' => ''
            ],
            [
                'name' => 'Gnocchi di riso, curry e capocollo',
                'course' => 'primi',
                'description' => 'Un primo piatto etnico, vegetariano, leggero e gustoso ma soprattutto adatto anche ai celiaci; gli gnocchi di riso cinesi con verdure.',
                'img' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.ifood.it%2Fwp-content%2Fuploads%2F2017%2F01%2Fgnocchi-di-riso-cinesi-con-verdure-1.jpg&f=1&nofb=1',
                'price' => 35.00,
                'visibility' => true,
                'slug' => ''
            ],
            [
                'name' => 'Spiedino di piccione',
                'course' => 'secondi',
                'description' => 'La carne di piccioni ha un gusto eccellente e ha molte qualità utili. Gli amanti del cibo credono che abbia un sapore migliore del buon pollo.',
                'img' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2F4.bp.blogspot.com%2F-1DYVsr4UsiA%2FV9RHIbusElI%2FAAAAAAABiJE%2FR2yHxbAzKEgrEqz1Xbb3TFEZO2hVkc7GwCLcB%2Fs1600%2Falbicocche%252B%252Bpollo%252B1.jpg&f=1&nofb=1',
                'price' => 80.00,
                'visibility' => true,
                'slug' => ''
            ],
            [
                'name' => 'Branzino, dragoncello e parmigiano',
                'course' => 'secondi',
                'description' => 'Il branzino è un pesce magro facilmente digeribile, ricco di proteine e contenente folati. Contiene acidi grassi omega 3, per cui può aiutare a tenere sotto controllo i trigliceridi e la pressione sanguigna.',
                'img' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi1.wp.com%2Fwww.popeating.it%2Fwp-content%2Fuploads%2F2014%2F11%2Fbranzinothm11.jpg%3Fresize%3D800%252C800%26quality%3D100%26strip%3Dall%26ssl%3D1&f=1&nofb=1',
                'price' => 45.00,
                'visibility' => true,
                'slug' => ''
            ],
            [
                'name' => 'Kiriboshi Daikon',
                'course' => 'antipasti',
                'description' => 'Daikon stufato con verdure',
                'img' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.restaurantyoshi.ro%2Fwp-content%2Fuploads%2F2019%2F03%2Fzuke-maguro-132.jpg&f=1&nofb=1',
                'price' => 6.00,
                'visibility' => true,
                'slug' => ''
            ],
            [
                'name' => 'Zuke Maguro',
                'course' => 'Sushi & Sashimi',
                'description' => 'Tonno scottato marinato in salsa di soia',
                'img' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.restaurantyoshi.ro%2Fwp-content%2Fuploads%2F2019%2F03%2Fzuke-maguro-132.jpg&f=1&nofb=1',
                'price' => 28.00,
                'visibility' => true,
                'slug' => ''
            ],
            [
                'name' => 'Una Don',
                'course' => 'Donburi / Chirashi',
                'description' => 'Ciotola di riso con anguilla teriyaki.',
                'img' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.justonecookbook.com%2Fwp-content%2Fuploads%2F2012%2F05%2FUnadon-w722.jpg&f=1&nofb=1',
                'price' => 38.00,
                'visibility' => true,
                'slug' => ''
            ],
            [
                'name' => 'Pollo Teriyaki',
                'course' => 'Yakimono',
                'description' => 'Pollo in salsa teriyaki.',
                'img' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcocinayrecetas-static.hola.com%2Fcocinothai%2Ffiles%2F2016%2F04%2FPollo-Teriyaki-Feath4.jpg&f=1&nofb=1',
                'price' => 18.00,
                'visibility' => true,
                'slug' => ''
            ]
        ];
        foreach ($dishes as $dish) {
            Dish::create([
                'name' => $dish['name'],
                'course' => $dish['course'],
                'description' => $dish['description'],
                'img' => $dish['img'],
                'price' => $dish['price'],
                'visibility' => $dish['visibility'],
                'slug' => Str::of($dish['name'])->slug('-'),
            ]);
        }
    }
}
