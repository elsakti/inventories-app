<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Gudang;
use App\Models\GudangBarang;
use Illuminate\Http\Request;

class GudangBarangController extends Controller
{
    public function formTambah($id)
    {
        $gudang = Gudang::findOrFail($id);
        return view('gudang_barang.create',[
            'judul' => 'SMI | Tambah Gudang Barang',
            'halaman' => 'gudang_barang',
            'semua_barang' => Barang::all(),
            'gudang' => $gudang
        ]);
    }

    public function tambahGudangBarang(Request $request)
    {
        $request->validate([
            'barang_id' => 'required',
            'gudang_id' => 'required',
        ]);

        // Cek apakah barang sudah ada di gudang ini
        $exists = GudangBarang::where('barang_id', $request->barang_id)
            ->where('gudang_id', $request->gudang_id)
            ->exists();

        if ($exists) {
            return back();
        }

        GudangBarang::create([
            'barang_id' => $request->barang_id,
            'gudang_id' => $request->gudang_id,
        ]);

        return redirect()->route('gudang.barang', $request->gudang_id);

    }

    public function hapusGudangBarang($id)
{
    $gudang_barang = GudangBarang::where('gudang_id', $id)
        ->where('barang_id', request()->barang_id)
        ->firstOrFail();
        
    $gudang_id = $gudang_barang->gudang_id;
    $gudang_barang->delete();
    
    return redirect()->route('gudang.barang', $gudang_id);
}

    
}
