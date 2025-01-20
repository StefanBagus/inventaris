<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogistikSubbidtekkom extends Model
{
    use HasFactory;

    protected $table = 'logistik_subbidtekkom'; // Nama tabel
    protected $fillable = ['nama_barang', 'jumlah_barang']; // Kolom yang dapat diisi
}
