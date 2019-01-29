<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonHangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('don_hangs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('memberId');
            $table->string('hoTen',50);
            $table->string('dienThoai',13);
            $table->string('email',50);
            $table->string('diaChi',150);
            $table->tinyinteger('phuongThucThanhToanId')->default(1);
            $table->tinyinteger('status')->default();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('don_hangs');
    }
}
