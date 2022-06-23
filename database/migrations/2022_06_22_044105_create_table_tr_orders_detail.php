<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTrOrdersDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_orders_detail', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->smallInteger("tr_orders_id")->nullable();
            $table->samllInteger("products_id")->nullable();
            $table->integer("price")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tr_orders_detail');
    }
}
