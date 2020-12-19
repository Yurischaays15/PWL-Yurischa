<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDatabuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_buku', function (Blueprint $table) {
            $table->increments('idbooks');
            $table->integer('idkategori');
            $table->string('judul',100);
            $table->string('penulis',100);
            $table->integer('stok');
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
        Schema::table('data_buku', function (Blueprint $table) {
            //
        });
    }
}
