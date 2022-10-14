<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggotas';
    protected $fillable = [
        'id_anggota',
        'nama',
        'no_hp',
        'alamat',
        'jenis_kelamin',
        'Status Pinjam',
    ];
    use HasFactory;
}
