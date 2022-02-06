<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiPenjualan extends Model
{
    use HasFactory;
    protected $table = 'transaksi_penjualans';

    protected $fillable = [
        'nama_pembeli',
        'barang_id',
        'jumlah_barang',
        'total_harga'
    ];

    protected $with = [
        'barang'
    ];

    public function barang()
    {
        return $this->hasOne(MasterBarang::class, 'id', 'barang_id');
    }
}
