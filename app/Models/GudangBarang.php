<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GudangBarang extends Model
{
    protected $table = 'gudang_barang';

    protected $fillable = ['gudang_id', 'barang_id'];

    public function gudang()
    {
        return $this->belongsTo(Gudang::class);
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
