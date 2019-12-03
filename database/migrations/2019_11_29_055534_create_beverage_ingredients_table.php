<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeverageIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('beverage_ingredients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('beverage_id');
            $table->unsignedBigInteger('ingredient_id');
            $table->integer('ingredient_amount')->default(1);
            $table->timestamps();

            $table->foreign('beverage_id')
                ->references('id')->on('beverages')
                ->onDelete('cascade');

            $table->foreign('ingredient_id')
                  ->references('id')->on('ingredients')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beverage_ingredients');
        Schema::disableForeignKeyConstraints();
        Schema::table('ingredient_beverage', function (Blueprint $table) {
            $table->dropForeign(['beverage_id']);
            $table->dropForeign(['ingredient_id']);
        });

        Schema::dropIfExists('beverage_ingredients');
    }
}
