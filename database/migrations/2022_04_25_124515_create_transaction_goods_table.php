<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_goods', function (Blueprint $table) {
            $table->id();
            $table->foreignId("good_id")->constrained()->restrictOnDelete()->cascadeOnUpdate();
            $table->foreignId("transaction_id")->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->double("amount");
            $table->unsignedBigInteger("unit_id");
            $table->string("description");
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
        Schema::dropIfExists('transaction_goods');
    }
}
