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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade');

            $table->foreignId('category_id')
                ->constrained('categories')
                ->onDelete('cascade');

            $table->string('judul');
            $table->text('deskripsi');
            $table->text('alamat');
            $table->string('foto')->nullable();

            $table->enum('status', [
                'menunggu',
                'diproses',
                'selesai',
                'ditolak'
            ])->default('menunggu');

            $table->timestamps();   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
