<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTblCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_customers', function (Blueprint $table) {
            $table->string('customer_name')->nullable()->change();
            $table->string('customer_password')->nullable()->change();
            $table->string('customer_phone')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_customers', function (Blueprint $table) {
            $table->string('customer_name')->nullable()->change();
            $table->string('customer_password')->nullable()->change();
            $table->string('customer_phone')->nullable()->change();
        });
    }
}
