<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCategorymatching extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_categorymatching', function (Blueprint $table) {
            $table->id();
            $table->string('amazon_id');
            $table->string('amazon_category_name')->nullable();
            $table->string('qoo10_category_name')->nullable();
            $table->string('qoo10_category_id')->nullable();
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
        Schema::dropIfExists('table_categorymatching');
    }
}
