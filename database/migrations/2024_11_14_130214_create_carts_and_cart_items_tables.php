<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsAndCartItemsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
            $table->timestamps(); 
        });

        Schema::create('cart_items', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('cart_id')->constrained()->onDelete('cascade'); 
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); 
            $table->integer('quantity')->default(1); 
            $table->decimal('price', 10, 2); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('cart_items');
        Schema::dropIfExists('carts');
    }
}
