<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('report_status_logs', function (Blueprint $table) {
            $table->id();

            $table->foreignId('report_id')
                ->constrained('reports')
                ->cascadeOnDelete();

            $table->foreignId('changed_by')
                ->constrained('users')
                ->restrictOnDelete();

            $table->string('old_status', 40)->nullable();

            $table->string('new_status', 40);

            $table->text('note')->nullable();

            $table->timestamp('changed_at');

            $table->timestamps();

            $table->index(['report_id', 'changed_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('report_status_logs');
    }
};