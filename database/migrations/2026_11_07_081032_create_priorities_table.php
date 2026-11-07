<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('priorities', function (Blueprint $table) {
            $table->id();

            $table->foreignId('report_id')
                ->unique()
                ->constrained('reports')
                ->cascadeOnDelete();

            // Komponen perhitungan prioritas
            $table->decimal('k_score', 3, 2);
            $table->decimal('d_score', 3, 2);
            $table->decimal('f_score', 3, 2);
            $table->decimal('u_score', 3, 2);

            // Hasil akhir Priority Score
            $table->decimal('score', 5, 3);

            // tinggi, sedang, rendah
            $table->string('level', 20);

            $table->timestamp('calculated_at');

            $table->timestamps();

            $table->index(['level', 'score']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('priorities');
    }
};