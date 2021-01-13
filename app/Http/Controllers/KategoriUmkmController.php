<?php

namespace App\Http\Controllers;

use App\KategoriUmkm;
use Illuminate\Http\Request;

class KategoriUmkmController extends Controller
{
    public function index()
    {
        return view('kategoris.index', [
            'kategoriumkms' => KategoriUmkm::all(),
        ]);
    }

    public function create()
    {
        return view('kategoris.create', [
            'kategori' => new KategoriUmkm(),
            ]);
    }

    public function store()
    {
        $attr = request()->validate([
            'nama_kategori' => 'required',
        ]);

        KategoriUmkm::create($attr);

        session()->flash('success', 'kategori UMKM Berhasil Ditambahkan');

        return redirect('kategoris/index');
    }

    public function edit($id)
    {
        $kategori = KategoriUmkm::find($id);
        return view('kategoris.edit', [
            'kategori' => $kategori,
        ]);
    }

    public function update($id,Request $request)
    {
        $this->validate($request, [
            'nama_kategori' => 'required',
        ]);

        $kategori = KategoriUmkm::find($id);
        $kategori->nama_kategori = $request->nama_kategori;

        $kategori->save();
        session()->flash('success', 'Kategori UMKM Berhasil Di Update');

        return redirect('kategoris/index');
    }

    public function delete($id)
    {
        $kategori = KategoriUmkm::find($id);
        $kategori->delete();
        session()->flash('success', 'Kategori UMKM Berhasil Di Update');
        return redirect('kategoris/index');
    }
}
