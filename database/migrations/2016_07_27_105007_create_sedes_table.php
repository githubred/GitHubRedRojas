<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSedesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sedes', function (Blueprint $table) {
          $table->increments('id');
          $table->char('se_codigo',4)->nullable(false);
          $table->char('se_ruc',11)->nullable(false);
          $table->string('se_razsoc',150)->nullable(false);
          $table->string('se_representa',100)->nullable(false);
          $table->string('se_cargo',50)->nullable(false);
          $table->string('se_direccion',50)->nullable(false);
          $table->string('se_fonos',100)->nullable(false);
          $table->string('se_web',100)->nullable(false);
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
        Schema::drop('sedes');
    }
}
