<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('facilities', function (Blueprint $table) {
            $table->id();

            $table->foreignId('category_id')
                ->constrained('categories')
                ->restrictOnDelete();

            $table->string('name', 150);

            $table->string('building', 150);

            $table->text('description')->nullable();

            $table->decimal('latitude', 10, 7)->nullable();

            $table->decimal('longitude', 10, 7)->nullable();

            $table->string('condition_status', 30)
                ->default('baik');

            $table->timestamps();

            $table->index(['building', 'condition_status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('facilities');
    }
};