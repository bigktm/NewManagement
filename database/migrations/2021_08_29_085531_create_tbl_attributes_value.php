<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblAttributesValue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_attributes_value', function (Blueprint $table) {
            $table->increments('attr_id');
            $table->integer('attributes_id');
            $table->string('attributes_value')->nullable();
            $table->string('attributes_qty')->nullable();
            $table->string('attributes_price')->nullable();
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
        Schema::dropIfExists('tbl_attributes_value');
    }
}
