<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhuongThucThanhToansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phuong_thuc_thanh_toans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phuongThuc',70);
            $table->tinyinteger('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phuong_thuc_thanh_toans');
    }
}
