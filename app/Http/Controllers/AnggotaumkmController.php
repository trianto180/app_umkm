<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnggotaUmkmController extends Controller
{
    public function index()
    {
        return view('anggotas.index');
    }
}
