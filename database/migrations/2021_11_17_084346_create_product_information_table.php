<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_information', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('importname_id');
            $table->string('asin');
            $table->string('title');
            $table->integer('price');
            $table->integer('quantity');
            $table->string('category');
            $table->integer('shipping_day')->nullable();
            $table->string('together_buy')->nullable();
            $table->string('description',10000)->nullable();
            $table->string('ranking')->nullable();
            $table->string('sale_date')->nullable();
            $table->string('product_size')->nullable();
            $table->string('brand')->nullable();
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
        Schema::dropIfExists('product_information');
    }
}
