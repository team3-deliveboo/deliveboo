<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dish_order', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('quantity')->unsigned();

            $table->unsignedBigInteger('dish_id');
            $table->foreign('dish_id')
                ->references('id')
                ->on('dishes');

            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')
                ->references('id')
                ->on('orders');
                
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dish_order');
    }
}

// DALLA REPO DEGLI ALTRI, CI MANCAVA UN PEZZO:

// class CreateDishOrderTable extends Migration
// {
//     /**
//      * Run the migrations.
//      *
//      * @return void
//      */
//     public function up()
//     {
//         Schema::create('dish_order', function (Blueprint $table) {
//             $table->unsignedBigInteger('dish_id');
//             $table->foreign('dish_id')
//                 ->references('id')
//                 ->on('dishes');

//             $table->unsignedBigInteger('order_id');
//             $table->foreign('order_id')
//                 ->references('id')
//                 ->on('orders');

//             $table->primary(['dish_id', 'order_id']);
//             $table->tinyInteger('quantity')->default(1);
//             $table->timestamps();
//         });
//     }

//     /**
//      * Reverse the migrations.
//      *
//      * @return void
//      */
//     public function down()
//     {
//         Schema::dropIfExists('dish_order');
//     }
// }
