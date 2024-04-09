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
        Schema::create('protocolos', function (Blueprint $table) {
            $table->id();
            $table->string('ptc_id', 5);
            $table->string('ptc_titulo');
            $table->string('ptc_situacao', 25);
            $table->string('ptc_status', 30);
            $table->string('ptc_usucadastro', 30);
            $table->string('ptc_datacadastro', 10);
            $table->text('ptc_observacao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('protocolos');
    }
};
