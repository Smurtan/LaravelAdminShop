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

            $table->string('title', 255);
            $table->string('slug', 255)->unique();
            $table->text('content')->nullable();
            $table->decimal('price', 10, 2)->default(0);
            $table->decimal('old_price', 10 , 2)->default(0)->nullable();
            $table->enum('status', ['0', '1'])->default('1');
            $table->string('keyword', 255)->default(NULL)->nullable();
            $table->string('description', 512)->default(NULL)->nullable();
            $table->string('image', 255)->nullable();
            $table->enum('hit', ['0', '1'])->default('0')->index();

            // Foreign keys
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('brand_id')->constrained('brands')->onDelete('cascade');

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
