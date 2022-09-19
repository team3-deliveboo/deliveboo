<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dishes', function (Blueprint $table) {

            $table->unsignedBigInteger('user_id')->after('id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users');

        });

        // Schema::table('posts', function (Blueprint $table) {
        //     $table->unsignedBigInteger('user_id');
        //     $table->foreign('user_id')
        //     ->references('id')
        //     ->on('users');

        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dishes', function (Blueprint $table) {
            $table->dropForeign("dishes_user_id_foreign");
            $table->dropColumn("user_id");
        });
    }

}
