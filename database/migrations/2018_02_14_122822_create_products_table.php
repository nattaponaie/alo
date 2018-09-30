<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_id');
            $table->string('product_name');
            $table->integer('product_price');
            $table->integer('product_old_price')->default('0');
            $table->integer('product_rating')->default('0');
            $table->integer('product_stock')->default('0');
            $table->string('product_desc');
            $table->integer('sub_id');
            $table->integer('onsale')->default('0');
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
        Schema::dropIfExists('products');
    }
}
