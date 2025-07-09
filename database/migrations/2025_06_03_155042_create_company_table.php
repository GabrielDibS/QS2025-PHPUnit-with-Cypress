<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTable extends Migration
{
    public function up()
    {
        Schema::create('empresas', function (Blueprint $tabela) {
            $tabela->id();
            $tabela->string('nome');
            $tabela->string('cnpj')->unique();
            $tabela->string('email_contato');
            $tabela->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company');
    }
};
