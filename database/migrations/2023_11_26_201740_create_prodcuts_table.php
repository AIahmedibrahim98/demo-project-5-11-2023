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
        Schema::create('prodcuts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price');
            $table->enum('unit', ['kg', 'liter', 'p'])->default('p');
            $table->foreignId('category_id')->constrained();
            $table->foreignId('created_by')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodcuts');
    }
};
