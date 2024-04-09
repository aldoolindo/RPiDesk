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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('ptc_id', 5)->nullable();
            $table->string('ptc_situacao', 50)->nullable();
            $table->string('ptc_dtcadastro', 10)->nullable();
            $table->string('ptc_respcadastro', 50)->nullable();
            $table->string('ptc_titulo')->nullable();
            $table->string('ptc_status', 50)->nullable();
            $table->text('ptc_observacao')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
