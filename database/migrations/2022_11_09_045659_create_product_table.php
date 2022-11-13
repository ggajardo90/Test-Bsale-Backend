<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name')->nullable()->index('product_name');
            $table->string('url_image')->nullable();
            $table->float('price', 10, 0)->nullable()->index('product_price');
            $table->integer('discount')->nullable()->index('product_discount');
            $table->integer('category')->nullable()->index('product_category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
