<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produkks', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('nama_produk');
            $table->string('harga');
            $table->integer('stok');
            $table->unsignedBigInteger('id_kategori');
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
        Schema::dropIfExists('produkks');
    }
};