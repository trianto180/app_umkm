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

    public function edit($id)
    {
        $anggota = AnggotaUmkm::find($id);
        return view('anggotas.edit', compact('anggota'));
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'kategori_umkm_id' => 'required',
            'nama_umkm' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        $anggota = AnggotaUmkm::find($id);
        $anggota->kategori_umkm_id = $request->kategori_umkm_id;
        $anggota->nama_umkm = $request->nama_umkm;
        $anggota->email = $request->email;
        $anggota->alamat = $request->alamat;
        $anggota->no_hp = $request->no_hp;
        $anggota->save();
        session()->flash('success', 'Anggota UMKM Berhasil Di Update');
        
        return redirect('/index');
    }
}
