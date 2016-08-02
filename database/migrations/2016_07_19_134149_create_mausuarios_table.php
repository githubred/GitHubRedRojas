<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMausuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mausuarios', function (Blueprint $table) {

            $table->increments('id')->unsigned();
            $table->char('ad_us_codigo',10)->nullable(false);
            $table->string('ad_us_unidad',20)->nullable(false);
            $table->string('ad_us_segusuarios',25)->nullable(false);
            $table->string('ad_us_segnivel',15)->nullable(false);
            $table->string('ad_us_segclave',50)->nullable(false);
            $table->datetime('ad_us_fechalta');
            $table->char('ad_us_codusal',10)->nullable(false);
            $table->char('ad_us_estado',1)->nullable(false);



            $table->rememberToken();
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
        Schema::drop('mausuarios');
    }
}
