<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukUmkmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk_umkms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_umkm_id');
            $table->string('nama_produk');
            $table->string('deskripsi_produk');
            $table->string('gambar_1');
            $table->string('gambar_2');
            $table->string('gambar_3');
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
        Schema::dropIfExists('produk_umkms');
    }
}
