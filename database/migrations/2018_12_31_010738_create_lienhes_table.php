<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLienhesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lienhes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hoTen',50);
            $table->string('email',50);
            $table->string('diaChi',200);
            $table->string('dienThoai',13);
            $table->string('tieuDe',100);
            $table->string('noiDung',300);
            $table->tinyinteger('status')->defaul(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lienhes');
    }
}
