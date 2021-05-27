<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersReceipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_receipes', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('order_id');
                $table->string('receipe_name');
                $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
                $table->Integer('price');
                $table->Integer('count');
                $table->unsignedBigInteger('receipe_id');
                $table->foreign('receipe_id')->references('id')->on('receipes')->onDelete('cascade');
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
        Schema::dropIfExists('orders_receipes');
    }
}
