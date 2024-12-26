<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Gudang;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function beranda()
    {
        return view('beranda.index',[
            'judul' => 'SMI | Beranda',
            'halaman' => 'beranda',
        ]);
    }

    public function barang()
    {
        return view('barang.index',[
            'judul' => 'SMI | Barang',
            'halaman' => 'barang',
            'semua_barang' => Barang::with('kategori')->get()
        ]);
    }

    public function kategori()
    {
        return view('kategori.index',[
            'judul' => 'SMI | Kategori',
            'halaman' => 'kategori',
            'semua_kategori' => Kategori::all()
        ]);
    }

    public function gudang()
    {
        return view('gudang.index',[
            'judul' => 'SMI | Gudang',
            'halaman' => 'gudang',
            'semua_gudang' => Gudang::all()
        ]);
    }
}
