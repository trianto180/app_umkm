<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriUmkm extends Model
{
    public function anggotaumkms()
    {
        return $this->hasMany(AnggotaUmkm::class);
    }

    public function blogumkm()
    {
        return $this->hasMany(BlogUmkm::class);
    }

    public function produkumkm()
    {
        return $this->hasMany(ProdukUmkm::class);
    }
}
