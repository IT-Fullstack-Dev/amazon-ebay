<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckAsinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_asin', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('importname_id');
            $table->integer('1pass_count')->nullable();
            $table->integer('2pass_count')->nullable();
            $table->integer('check_status')->nullable();
            $table->string('start_work')->nullable();
            $table->string('end_work')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('check_asin');
    }
}
