<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apurchased extends Model
{
    use HasFactory;
    protected $table = 'spurchased';
    protected $fillable = ['tahun_pembelian', 'nama_barang', 'kode', 'harga_satuan', 'jumlah', 'total_harga', 'pembeli', 'toko', 'keterangan'];

}
