<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTblSlider extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_slider', function (Blueprint $table) {
            $table->string('slider_title')->nullable()->change();
            $table->string('slider_subtitle')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_slider', function (Blueprint $table) {
            $table->string('slider_title')->nullable()->change();
            $table->string('slider_subtitle')->nullable()->change();
        });
    }
}
