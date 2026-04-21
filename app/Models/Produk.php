<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    // Nama tabel (opsional kalau sudah sesuai default)
    protected $table = 'produks';

    // Primary key (opsional)
    protected $primaryKey = 'id';

    // Kolom yang boleh diisi (WAJIB untuk mass assignment)
    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'stok'
    ];

    // Format kolom (optional, biar rapi)
    protected $casts = [
        'harga' => 'integer',
        'stok' => 'integer'
    ];
}
