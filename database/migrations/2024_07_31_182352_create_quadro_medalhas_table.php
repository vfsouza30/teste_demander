<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuadroMedalhasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quadro_medalhas', function (Blueprint $table) {
            $table->id();
            $table->string('equipe', 100);
            $table->mediumInteger('ouro');
            $table->mediumInteger('prata');
            $table->mediumInteger('bronze');
            $table->integer('total');
            $table->integer('ano');
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
        Schema::dropIfExists('quadro_medalhas');
    }
}
