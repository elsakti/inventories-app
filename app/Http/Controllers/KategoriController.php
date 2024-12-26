<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{

    public function formTambah()
    {
        return view('kategori.create', [
            'judul' => 'SMI | Kategori',
            'halaman' => 'kategori',
        ]);
    }

    public function tambahKategori(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        Kategori::create([
            'nama' => $request->nama,
        ]);

        return redirect()->route('kategori');
    }

    public function formPerbarui($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.edit', [
            'judul' => 'SMI | Kategori',
            'halaman' => 'kategori',
            'kategori' => $kategori,
        ]);
    }

    public function perbaruiKategori(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $kategori = Kategori::findOrFail($id);

        $kategori->update([
            'nama' => $request->nama,
        ]);

        return redirect()->route('kategori');
    }

    public function hapusKategori($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        return redirect()->back();
    }
}
