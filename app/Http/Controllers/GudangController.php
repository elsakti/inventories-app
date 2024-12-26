<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use Illuminate\Http\Request;

class GudangController extends Controller
{

    public function formTambah()
    {
        return view('gudang.create', [
            'judul' => 'SMI | Gudang',
            'halaman' => 'gudang',
        ]);
    }
    
    public function tambahGudang(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        Gudang::create([
            'nama' => $request->nama,
        ]);

        return redirect()->route('gudang');
    }

    public function formPerbarui($id)
    {
        $gudang = Gudang::findOrFail($id);
        return view('gudang.edit', [
            'judul' => 'SMI | Gudang',
            'halaman' => 'gudang',
            'gudang' => $gudang,
        ]);
    }

    public function perbaruiGudang(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $gudang = Gudang::findOrFail($id);

        $gudang->update([
            'nama' => $request->nama,
        ]);

        return redirect()->route('gudang');

    }

    public function hapusGudang($id)
    {
        $gudang = Gudang::findOrFail($id);
        $gudang->delete();
        return redirect()->back();
    }

    public function tampilkanBarang($id)
    {
        $gudang = Gudang::findOrFail($id);
        return view('gudang_barang.index', [
            'judul' => 'SMI | Barang Di Gudang',
            'halaman' => 'gudang',
            'gudang' => $gudang,
        ]);
    }
}