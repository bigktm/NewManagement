<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableTblProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->increments('product_id');
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->string('product_name')->unique();
            $table->string('product_image');
            $table->string('product_slug');
            $table->string('product_sku');
            $table->string('product_desc')->nullable();
            $table->decimal('product_price');
            $table->decimal('product_price_sale')->nullable();
            $table->integer('product_qty');
            $table->text('product_content')->nullable();
            $table->integer('product_status');
            $table->string('product_keywords');
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
        Schema::dropIfExists('tbl_product');
    }
}
