<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ProdukUmkm extends Model
{
    public function anggotaumkms()
    {
        return $this->BelongsToMany(AnggotaUmkm::class);
    }

    public function kategoriumkms()
    {
        return $this->belongsTo(KategoriUmkm::class, 'kategori_umkm_id');
    }
}
