<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusRolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_rol', function (Blueprint $table) {
            $table->unsignedInteger('rol_id');
            $table->foreign('rol_id')->references('id')->on('rols')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('menu_id');
            $table->foreign('menu_id')->references('id')->on('menu')->onDelete('cascade')->onUpdate('restrict');
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus_rols');
    }
}
