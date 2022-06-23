<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTrOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_tr_order', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("code_transaction",255)->nullable();
            $table->integer("total_price")->nullable();
            $table->integer("customer_id")->nullable();
            $table->string("status")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_tr_order');
    }
}
