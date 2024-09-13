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
        Schema::create('servicos', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->string('preco');
            $table->foreignId('profissao_id')->references('id')->on('profissoes');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('servicos');
    }
};
