<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
        protected $table = 'peminjamen';
        protected $fillable = [
        'id',
        'aidi',
        'nomor_peminjaman',
        'id_anggota',
        'tanggal_pinjam',
        'lama',
        'id_pegawai',
        'id_buku',
        'nama',
        'tanggal_kembali',
        'statuspeminjaman'
        ];
        protected $primaryKey = 'idpeminjaman';
    }
    
