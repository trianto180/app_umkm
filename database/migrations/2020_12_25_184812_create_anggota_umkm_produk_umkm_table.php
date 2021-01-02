<?php

use Facade\Ignition\Tabs\Tab;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaUmkmProdukUmkmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota_umkm_produk_umkm', function (Blueprint $table) {
            $table->foreignId('anggota_umkm_id')->constrained('anggota_umkms');
            $table->foreignId('produk_umkm_id')->constrained('produk_umkms');
            $table->primary(['anggota_umkm_id', 'produk_umkm_id']);

            // $table->foreign('anggota_umkm_id')->references('id')->on('anggota_umkms')->onDelete('cascade');
            // $table->foreign('anggota_umkm_id')->references('id')->on('anggota_umkms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggota_umkm_produk_umkm');
    }
}
