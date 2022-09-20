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

php artisan make:migration create_dish_order_table

php artisan make:migration add_foreign_keys_to_orders_table

*********************************
DALLA REPO SCARICATA, il Model di Order:
*********************************

class Order extends Model
{
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'address',
        'date',
        'time',
        'price_total',
        'created_at',
        'updated_at',
    ];

    public function dishes()
    {
        return $this->belongsToMany('App\Model\Dish')
            ->withPivot('quantity')
            ->withTrashed()
            ->withTimestamps();
    }

    public function payment()
    {
        return $this->belongsTo('App\Model\Payment');
    }
}

