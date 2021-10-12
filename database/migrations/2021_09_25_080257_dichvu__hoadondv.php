<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DichvuHoadondv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('dichvu_hoadondv', function (Blueprint $table) {
            $table->id();
            $table->integer('dichvu_id');
            $table->integer('soluong');
            $table->integer('giadv');
            $table->integer('hoadon_id');
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
        //
        Schema::dropIfExists('dichvu_hoadondv');
    }
}
