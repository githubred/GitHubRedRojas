<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesuscripcionesredsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desuscripcionesreds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('su_codusre')->unsigned();
            $table->foreign('su_codusre')->references('id')->on('users')->onDelete('cascade');
            $table->date('su_fechaini');
            $table->date('su_fechafin');
            $table->char('su_estado',1)->nullable(false);

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
        Schema::drop('desuscripcionesreds');
    }
}
