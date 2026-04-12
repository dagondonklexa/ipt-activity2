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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price', 10, 2);
<<<<<<< HEAD
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
=======
            $table->foreignId('category_id')->constrained("categories")->onDelete('cascade');
>>>>>>> 9b0718c9fa374729ec6361e4b98e6ef5bc563606
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
