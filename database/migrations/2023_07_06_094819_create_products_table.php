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

            $table->string("name");
            $table->boolean("in_stock")->default(false);
            $table->string("content");
            $table->string("image");

            $table->unsignedBigInteger("category_id")->nullable();

            $table->index('category_id','product_category_idx');
            $table->foreign("category_id","product_category_fk")->on('categories')->references("id");

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
