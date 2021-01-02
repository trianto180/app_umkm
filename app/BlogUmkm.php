<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogUmkm extends Model
{
    public function anggotaumkms()
    {
        return $this->belongsTo(AnggotaUmkm::class, 'anggota_umkm_id');
    }

    public function kategoriumkms()
    {
        return $this->belongsTo(KategoriUmkm::class, 'kategori_umkm_id');
    }
}
