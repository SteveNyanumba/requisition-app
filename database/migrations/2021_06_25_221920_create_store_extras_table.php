<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreExtrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_extras', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('store_id');
            $table->string('address_line1');
            $table->string('address_line2');
            $table->string('city');
            $table->string('county');
            $table->longText('payment_method');
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
        Schema::dropIfExists('store_extras');
    }
}
