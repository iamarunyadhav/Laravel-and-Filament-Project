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
        Schema::create('type_assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_assignments_id')->constrained('products')->onDelete('cascade');
            $table->foreignId('type_id')->constrained('product_types')->onDelete('cascade');
            $table->string('type_assignments_type', 255);
            // $table->unsignedBigInteger('product_id');
            $table->string('my_bonus_field', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_assignments');
    }
};
