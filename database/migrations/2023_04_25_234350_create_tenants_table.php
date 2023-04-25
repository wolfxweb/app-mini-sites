<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('subdominio')->nullable()->unique();
            $table->string('slug')->nullable()->unique();
            $table->string('nome')->unique();
            $table->boolean('status')->default(true);
            $table->text('sistema_info')->nullable();
            $table->uuid('uuid')->nullable();
            $table->string('db_database')->nullable();
            $table->string('db_hostname')->nullable();
            $table->string('db_username')->nullable();
            $table->string('db_password')->nullable();
            $table->string('logo')->nullable();
            $table->string('rasao_social')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('inscricao_estadual')->nullable();
            $table->string('inscricao_municipal')->nullable();
            $table->string('telefone_fixo')->nullable();
            $table->string('telefone_celular')->nullable();
            $table->string('endereco')->nullable();
            $table->string('numero')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('cep')->nullable();
            $table->string('tipo_url')->default('slug');
            $table->unsignedBigInteger('usu_id');
            $table->foreign('usu_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
};
