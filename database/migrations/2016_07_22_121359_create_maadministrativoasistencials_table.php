<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaadministrativoasistencialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maadministrativoasistencials', function (Blueprint $table) {
          $table->increments('id');
          $table->char('ad_codigo',10)->nullable(false);
          $table->string('ad_apater',20)->nullable(false);
          $table->string('ad_amater',20)->nullable(false);
          $table->string('ad_nombre',20)->nullable(false);
          $table->char('ad_dni',8)->nullable(false);
          $table->string('email',80);
          $table->string('password');
          $table->char('ad_estado',1)->nullable(false);

          $table->integer('pr_codusre')->unsigned();
          $table->foreign('pr_codusre')->references('id')->on('users')->onDelete('cascade');

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
        Schema::drop('maadministrativoasistencials');
    }
}
