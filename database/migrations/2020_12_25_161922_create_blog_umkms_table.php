<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogUmkmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_umkms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_umkm_id')->nullable();
            $table->foreignId('anggota_umkm_id')->nullable();
            $table->string('judul_blog');
            $table->string('deskripsi_awal');
            $table->string('deskripsi_lanjutan');
            $table->timestamp('tanggal_terbit');
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
        Schema::dropIfExists('blog_umkms');
    }
}
