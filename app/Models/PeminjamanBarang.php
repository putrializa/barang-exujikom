<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeminjamanBarang extends Model
{
    protected $primaryKey = 'pbd_id';
    protected $table = 'td_peminjaman_barang';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'pbd_id',
        'pb_id',
        'br_kode',
        'pdb_tgl',
        'pdb_sts'
    ];
}
