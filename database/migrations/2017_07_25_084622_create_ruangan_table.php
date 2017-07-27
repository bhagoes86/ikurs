<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRuanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //membuat table field
        Schema::create('ruangan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_card');
            $table->string('nama_ruangan');
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
        //menghapus table
        Schema::dropIfExists('ruangan');
    }
}
