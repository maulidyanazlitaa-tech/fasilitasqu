<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();

            // Pengguna yang membuat laporan
            $table->foreignId('user_id')
                ->constrained('users')
                ->restrictOnDelete();

            // Fasilitas yang dilaporkan
            $table->foreignId('facility_id')
                ->constrained('facilities')
                ->restrictOnDelete();

            // Petugas yang ditugaskan
            $table->foreignId('assigned_to')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            // Admin yang memverifikasi
            $table->foreignId('verified_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->text('description');

            // Skala kerusakan 1 sampai 5, diisi saat verifikasi
            $table->unsignedTinyInteger('damage_level')
                ->nullable();

            $table->string('status', 40)
                ->default('menunggu_verifikasi');

            // Alasan jika laporan ditolak
            $table->text('rejection_reason')->nullable();

            $table->timestamp('verified_at')->nullable();

            $table->timestamps();

            $table->index(['status', 'created_at']);
            $table->index(['facility_id', 'created_at']);
            $table->index(['assigned_to', 'status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};