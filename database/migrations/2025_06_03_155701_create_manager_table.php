<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagerTable extends Migration
{
    public function up()
    {
        Schema::create('gerentes', function (Blueprint $tabela) {
            $tabela->id();
            $tabela->string('nome');
            $tabela->string('email')->unique();
            $tabela->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gerentes');
    }
}
