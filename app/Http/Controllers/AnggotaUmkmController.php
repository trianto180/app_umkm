<?php

namespace App\Http\Controllers;

use App\AnggotaUmkm;
use App\KategoriUmkm;
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
        return view('anggotas.create', [
            'anggota' => new AnggotaUmkm(),
            'kategoriumkm' => KategoriUmkm::get(),
            ]);
    }

    public function store(Request $request)
    {
		$this->validate($request, [
			'foto_umkm' => 'image|mimes:jpeg,png,gif,webp|max:2048'
		]);
        $attr = request()->validate([
            'kategori_umkm_id' => 'required',
            'nama_umkm' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'foto_umkm' => 'required',
        ]);
        $nama_umkm = request('nama_umkm');
        $attr['nama_umkm'] = $nama_umkm;
        $foto_umkm = request()->file('foto_umkm') ? request()->file('foto_umkm')->store('images/anggotas') : null;

        $foto_umkm = request()->file('foto_umkm');
        $foto_umkmUrl = $foto_umkm->storeAs("images/anggotas", "{$nama_umkm}.{$foto_umkm->extension()}");

        $attr['foto_umkm'] = $foto_umkmUrl;

        AnggotaUmkm::create($attr);

        session()->flash('success', 'Anggota UMKM Berhasil Ditambahkan');

        return redirect('anggotas/index');
    }

    public function edit($id)
    {
        $anggota = AnggotaUmkm::find($id);
        return view('anggotas.edit', [
            'anggota' => $anggota,
            'kategoriumkm' => KategoriUmkm::get(),
        ]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
			'foto_umkm' => 'image|mimes:jpeg,png,gif,webp|max:2048'
		]);
        $foto_umkm = request()->file('foto_umkm')->store("images/anggotas");

        $this->validate($request, [
            'kategori_umkm_id' => 'required',
            'nama_umkm' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'foto_umkm' => 'required',
        ]);

        $anggota = AnggotaUmkm::find($id);
        $anggota->kategori_umkm_id = $request->kategori_umkm_id;
        $anggota->nama_umkm = $request->nama_umkm;
        $anggota->email = $request->email;
        $anggota->alamat = $request->alamat;
        $anggota->no_hp = $request->no_hp;
        $anggota['foto_umkm'] = $foto_umkm;
        $anggota->save();
        session()->flash('success', 'Anggota UMKM Berhasil Di Update');

        return redirect('anggotas/index');
    }

    public function delete($id)
    {
        $anggota = AnggotaUmkm::find($id);
        $anggota->delete();
        return redirect('anggotas/index');
    }
}