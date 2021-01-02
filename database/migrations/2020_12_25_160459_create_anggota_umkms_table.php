<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaUmkmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota_umkms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_umkm_id')->nullable();
            $table->string('nama_umkm');
            $table->string('email')->unique();
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('foto_umkm')->nullable();
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
        Schema::dropIfExists('anggota_umkms');
    }
}
