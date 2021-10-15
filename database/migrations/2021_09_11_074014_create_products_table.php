<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('product_name',120);
            $table->float('price');
            $table->integer('stock');
            $table->string('slug',120);
            $table->string('image',120);
            $table->string('description',500)->nullable();
            $table->integer('category_id');
            $table->tinyInteger('status')->default(1)->comment = "1. Active, 0 inactive and 2 for new product";
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
