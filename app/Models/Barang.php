<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Barang extends Model
{
    protected $table = 'barang';

    protected $fillable = ['kategori_id', 'nama', 'jumlah', 'tanggal_masuk'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function gudang()
    {
        return $this->belongsToMany(Gudang::class, 'gudang_barang', 'barang_id', 'gudang_id');
    }
}
