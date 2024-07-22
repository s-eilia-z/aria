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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->foreignId('responsible_id')->constrained('users');
            $table->foreignId('category_id')->constrained('categories');
            $table->string('destination');
            $table->string('checkpoint');
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->enum('gender', ['male', 'female', 'all'])->default('all');
            $table->tinyInteger('difficulty');
            $table->double('price')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
