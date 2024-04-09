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
        Schema::create('pendencias', function (Blueprint $table) {
            $table->id();
            $table->string('pdnc_id', 5);
            $table->string('pdnc_titulo');
            $table->string('pdnc_situacao', 25);
            $table->string('pdnc_status', 30);
            $table->string('pdnc_usucadastro', 30);
            $table->string('pdnc_datacadastro', 10);
            $table->text('pdnc_observacao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendencias');
    }
};
