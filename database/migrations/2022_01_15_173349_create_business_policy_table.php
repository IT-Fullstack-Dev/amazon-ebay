<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessPolicyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_policy', function (Blueprint $table) {
            $table->id();
            $table->string('user_token',2000);
            $table->string('payment_id');
            $table->string('payment_name');
            $table->string('return_id');
            $table->string('return_name');
            $table->string('shipping_id');
            $table->string('shipping_name');
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
        Schema::dropIfExists('business_policy');
    }
}
