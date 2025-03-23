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
        Schema::create('ourtrips', function (Blueprint $table) {
            $table->id();
            $table->string('category' , 100);
            $table->string('duration',100)->default('Any');
            $table->string('date')->default('Any');
            $table->string('month')->default('Any');
            $table->decimal('min_price', 10, 2)->nullable()->default(0.00);
            $table->decimal('max_price', 10, 2)->nullable()->default(0.00);
            $table->integer('rating')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ourtrips');
    }
};
