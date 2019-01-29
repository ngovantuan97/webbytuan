<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTintucsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tintucs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('anhTinTuc',100);
            $table->string('tieuDe',100);
            $table->date('ngayDang');
            $table->text('moTa');
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
        Schema::dropIfExists('tintucs');
    }
}
