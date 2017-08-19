<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class clinicas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',30);
            $table->string('fantasia',50);
            $table->string('razao_social',50);
            $table->string('cnpj',20);
            $table->string('cep',8)->nullable();
            $table->string('latitude',20);
            $table->string('longitude',20);
            $table->string('endereco',50);
            $table->string('numero',5);
            $table->string('bairro',20);
            $table->string('cidade',20);
            $table->string('estado',20);
            $table->string('especialidade',200);
            $table->tinyInteger('transporte');
            $table->string('tratamento',200);
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
        Schema::drop('clinicas');
    }
}
