<?php

namespace App;

use App\BlogUmkm;
use App\KategoriUmkm;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class AnggotaUmkm extends Model
{
    protected $fillable = ['kategori_umkm_id','nama_umkm', 'email', 'alamat', 'no_hp', 'foto'];

    public function kategoriumkm()
    {
        return $this->belongsTo(KategoriUmkm::class, 'kategori_umkm_id');
    }

    public function blogumkm()
    {
        return $this->belongsTo(BlogUmkm::class, 'blog_umkm_id');
    }

    public function produkumkms()
    {
        return $this->BelongsToMany(ProdukUmkm::class);
    }
}
