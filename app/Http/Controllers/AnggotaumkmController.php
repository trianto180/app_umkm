<?php

namespace App\Http\Controllers;

use App\AnggotaUmkm;
use Illuminate\Http\Request;

class AnggotaUmkmController extends Controller
{
    public function index()
    {
        // $anggotaumkms = AnggotaUmkm::find(1);
        // return view('anggotas.index', compact('anggotaumkms'));
        return view('anggotas.index', [
            'anggotaumkms' => AnggotaUmkm::latest()->paginate(10),
        ]);
    }
}
