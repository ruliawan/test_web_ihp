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
            $table->bigIncrements('idproduct');
            $table->unsignedBigInteger('idcategories')->nullable();
            $table->string('product_name', 255)->nullable();
            $table->double('price')->nullable();
            $table->double('stock')->nullable();
            $table->timestamps();
            $table->foreign('idcategories')->references('idcategories')->on('categories')->onUpdate('cascade')->onDelete('cascade');
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
