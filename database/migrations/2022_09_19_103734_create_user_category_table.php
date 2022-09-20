<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_category', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
                
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories');

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
        Schema::dropIfExists('user_category');
    }
}

// DALLA REPO DEGLI ALTRI, CI MANCAVA UN PEZZO PURE IN QUESTA

// // class CreateCategoryUserTable extends Migration
// {
//     /**
//      * Run the migrations.
//      *
//      * @return void
//      */
//     public function up()
//     {
//         Schema::create('category_user', function (Blueprint $table) {
//             $table->unsignedBigInteger('user_id');
//             $table->foreign('user_id')
//                 ->references('id')
//                 ->on('users');

//             $table->unsignedBigInteger('category_id');
//             $table->foreign('category_id')
//                 ->references('id')
//                 ->on('categories');

//             $table->primary(['user_id', 'category_id']);
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
//         Schema::dropIfExists('category_user');
//     }
// }