<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('notificaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('boleta_id')->nullable()->constrained('boletas')->onDelete('cascade');
            $table->string('tipo'); // whatsapp, telegram
            $table->text('mensaje');
            $table->string('estado')->default('pendiente'); // pendiente, enviado, fallido
            $table->text('respuesta_api')->nullable();
            $table->integer('intentos')->default(0);
            $table->timestamp('enviado_at')->nullable();
            $table->timestamps();

            $table->index(['estado', 'created_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('notificaciones');
    }
};
