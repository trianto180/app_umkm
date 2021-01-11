<?php

namespace App\Http\Controllers;

use App\AnggotaUmkm;
use Illuminate\Http\Request;

class AnggotaUmkmController extends Controller
{
    public function index()
    {
        return view('anggotas.index', [
            'anggotaumkms' => AnggotaUmkm::all(),
        ]);
    }

    public function create()
    {
        return view('anggotas.create');
    }

    public function store()
    {
        $attr = request()->validate([
            'kategori_umkm_id' => 'required',
            'nama_umkm' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        AnggotaUmkm::create($attr);

        session()->flash('success', 'Anggota UMKM Berhasil Ditambahkan');
        
        return redirect('/index');
    }
}
