<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_ingredients', function (Blueprint $table) {
            $table->unsignedInteger('prod_id');
            $table->foreign('prod_id')->references('id')->on('products')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('ingred_id');
            $table->foreign('ingred_id')->references('id')->on('ingredients')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_ingredients');
    }
}
