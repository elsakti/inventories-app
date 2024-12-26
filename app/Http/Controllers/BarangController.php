<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function formTambah()
    {
        return view('barang.create',[
            'judul' => 'SMI | Tambah Barang',
            'halaman' => 'barang',
            'semua_kategori' => Kategori::all(),
        ]);
    }

    public function tambahBarang(Request $request)
    {
        $request->validate([
            'kategori_id' => 'required|exists:kategori,id',
            'nama' => 'required',
            'jumlah' => 'required|integer',
            'tanggal_masuk' => 'required',
        ]);

        Barang::create([
            'kategori_id' => $request->kategori_id,
            'nama' => $request->nama,
            'jumlah' => $request->jumlah,
            'tanggal_masuk' => $request->tanggal_masuk,
        ]);

        return redirect()->route('barang');
    }

    public function formPerbarui($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.edit',[
            'judul' => 'SMI | Edit Barang',
            'halaman' => 'barang',
            'semua_kategori' => Kategori::all(),
            'barang' => $barang,
        ]);
    }

    public function perbaruiBarang(Request $request, $id)
    {
        $request->validate([
            'kategori_id' => 'required|exists:kategori,id',
            'nama' => 'required',
            'jumlah' => 'required|integer',
            'tanggal_masuk' => 'required',
        ]);

        $barang = Barang::findOrFail($id);
        
        $barang->update([
            'kategori_id' => $request->kategori_id,
            'nama' => $request->nama,
            'jumlah' => $request->jumlah,
            'tanggal_masuk' => $request->tanggal_masuk,
        ]);

        return redirect()->route('barang');
    }

    public function hapusBarang($id)
    {
        $barang = Barang::findOrfail($id);
        $barang->delete();
        return redirect()->route('barang');
    }
}
