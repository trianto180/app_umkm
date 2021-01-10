<?php

namespace App;
use App\AnggotaUmkm;
use Illuminate\Database\Eloquent\Model;

class KategoriUmkm extends Model
{
    protected $fillable = ['nama_kategori'];

    public function anggotaumkm()
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
