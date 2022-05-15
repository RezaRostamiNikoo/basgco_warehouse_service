<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("tahvil_girande");
            $table->unsignedBigInteger("tahvil_dahande");
            $table->unsignedBigInteger("row");
            $table->string("description");
            $table->string("string_date");
            $table->string("movagat");
            $table->unsignedBigInteger("request_id");
            $table->boolean("taeedfarayand_girande");
            $table->boolean("taeedfarayand_dahande");
            $table->id();
            $table->id();
            $table->timestamp("date")->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
