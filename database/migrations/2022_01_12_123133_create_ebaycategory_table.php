<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEbaycategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ebaycategory', function (Blueprint $table) {
            $table->id();
            $table->string('level')->nullable();
            $table->string('cat_name')->nullable();
            $table->string('cat_id')->nullable();
            $table->string('cat_parent_id')->nullable();
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
        Schema::dropIfExists('ebaycategory');
    }
}
