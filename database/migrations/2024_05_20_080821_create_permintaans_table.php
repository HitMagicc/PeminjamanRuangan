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
        Schema::create('permintaan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_ruangan')->constrained('ruangan')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_user')->constrained('user')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_berkas')->constrained('berkas')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('approval');
            $table->string('peruntukan');
            $table->string('alasan')->nullable();
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permintaans');
    }
};
