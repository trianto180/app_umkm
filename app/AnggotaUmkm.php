<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\BlogUmkm;

class AnggotaUmkm extends Model
{
    public function kategoriumkm()
    {
        return $this->hasOne(KategoriUmkm::class);
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
