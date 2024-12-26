<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    protected $table = 'gudang';

    protected $fillable = ['nama'];

    public function barang()
    {
        return $this->belongsToMany(Barang::class, 'gudang_barang', 'gudang_id', 'barang_id');
    }
}
