<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMamedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mamedicos', function (Blueprint $table) {
          $table->increments('id');
          $table->char('pr_codigo',10);
          $table->string('pr_apater',20)->nullable(false);
          $table->string('pr_amater',20)->nullable(false);
          $table->string('pr_nombre',20)->nullable(false);
          $table->string('pr_nrocol',7)->nullable(false);
          $table->char('pr_dni',50)->nullable(false);
          $table->date('pr_nacfecha')->nullable(false);
          $table->string('pr_dirdomi',100)->nullable(false);
          $table->string('pr_dirfono',12);
          $table->string('pr_dircelu',12);
          $table->string('email',80);
          $table->datetime('pr_fechregi')->nullable(false);
          $table->char('pr_estado',1);
          $table->string('password');

          $table->integer('pr_codusre')->unsigned();
          $table->foreign('pr_codusre')->references('id')->on('users')->onDelete('cascade');

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
        Schema::drop('mamedicos');
    }
}
