<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;

class KategoriController extends Controller
{
    public function religi() {
        $data = Destinasi::where('kategori', 'Objek Wisata Religi')->get();
        return view('kategori.wisatareligi', compact('data'));
    }

    public function mangrove() {
        $data = Destinasi::where('kategori', 'Objek Wisata Mangrove')->get();
        return view('kategori.wisatamangrove', compact('data'));
    }

    public function sejarah() {
        $data = Destinasi::where('kategori', 'Objek Wisata Sejarah')->get();
        return view('kategori.wisatasejarah', compact('data'));
    }
}

