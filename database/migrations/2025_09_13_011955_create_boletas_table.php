<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('boletas', function (Blueprint $table) {
            $table->id();
            $table->string('serie')->default('B001');
            $table->string('correlativo');
            $table->date('fecha_emision');
            $table->decimal('monto_total', 10, 2);
            $table->string('estado_sunat')->nullable();
            $table->text('xml_path')->nullable();
            $table->text('cdr_path')->nullable();
            $table->string('hash_cdr')->nullable();
            $table->boolean('es_automatica')->default(true);
            $table->text('observaciones')->nullable();
            $table->timestamps();

            $table->unique(['serie', 'correlativo']);
            $table->index(['fecha_emision', 'es_automatica']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('boletas');
    }
};
