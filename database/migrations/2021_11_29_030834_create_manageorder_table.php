<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManageorderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manageorder', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('shippingStatus');
            $table->string('orderDate');
            $table->string('paymentDate')->nullable();
            $table->string('estShippingDate')->nullable();
            $table->integer('orderNo');
            $table->string('itemCode');
            $table->string('itemTitle');
            $table->integer('orderPrice');
            $table->integer('orderQty');
            $table->string('receiver');
            $table->string('zipCode');
            $table->string('shippingAddr');
            $table->string('receiveMobile');
            $table->string('paymentMethod');
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
        Schema::dropIfExists('manageorder');
    }
}
