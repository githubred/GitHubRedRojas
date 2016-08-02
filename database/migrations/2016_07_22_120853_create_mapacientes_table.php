<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMapacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapacientes', function (Blueprint $table) {


            $table->increments('id');
            $table->char('pa_codigo',10)->nullable(false);
            $table->string('pa_apater',30)->nullable(false);
            $table->string('pa_amater',30)->nullable(false);
            $table->string('pa_nombre',30)->nullable(false);
            $table->char('pa_sexo',1)->nullable(false);
            $table->char('pa_estciv',1)->nullable(false);
            $table->char('pa_filiacion',1)->nullable(false);
            $table->char('pa_dni',8)->nullable(false);
            $table->date('pa_nacfecha')->nullable(false);
            $table->string('pa_dirdomi',50)->nullable(false);
            $table->string('pa_dirfono',12)->nullable(true);
            $table->string('pa_dircelu',12)->nullable(true);
            $table->date('pa_fechinsc')->nullable(false);
            $table->date('pa_fechregi')->nullable(false);

            $table->integer('pr_codusre')->unsigned();
            $table->foreign('pr_codusre')->references('id')->on('users')->onDelete('cascade');


            $table->char('pa_estado',1)->nullable(false);
            $table->string('pa_clave',15)->nullable(true);
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
        Schema::drop('mapacientes');
    }
}
