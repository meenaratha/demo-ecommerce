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
            $table->string('product_name')->nullable();
            $table->text('product_description')->nullable();
            $table->string('original_price')->nullable();
            $table->string('discount_price')->nullable();
            $table->string('tax')->nullable();
            $table->string('brand')->nullable();
            $table->string('product_code')->nullable();
            $table->string('reward_point')->nullable();
            $table->string('stock')->nullable();
            $table->string('quantity')->nullable();
            $table->string('meta_tag')->nullable();
            $table->string('productimage')->nullable();
            $table->string('product_thumbnail')->nullable();
            $table->string('discount_option')->nullable();
            $table->string('status')->nullable();
             // Add the new column
            //   $table->unsignedBigInteger('category_id');
            //  // Add foreign key constraint
            //  $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
        // Remove the column and foreign key constraint
        // $table->dropForeign(['category_id']);
        // $table->dropColumn('category_id');
    }
};
