# deliveboo

composer create-project --prefer-dist laravel/laravel:^7.0 deliveboo

npm install

composer require laravel/ui:^2.4

php artisan ui vue --auth

php artisan migrate

php artisan make:model -m NomeAlSingolare

php artisan migrate:rollback

php artisan make:controller --resource NomeController //CRUD

php artisan make:seeder UsersTableSeeder / DishesTableSeeder / CategoriesTableSeeder

php artisan db:seed --class UsersTableSeeder

NomeModel::truncate();