<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMucgiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mucgias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenMucGia',50);
            $table->integer('mucGiaTu');
            $table->integer('mucGiaDen');
            $table->tinyinteger('status')->default(1);
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
        Schema::dropIfExists('mucgias');
    }
}
