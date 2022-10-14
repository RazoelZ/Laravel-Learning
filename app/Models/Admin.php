<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';
    protected $fillable = [
        'id_pegawai',
        'nama',
        'no_hp',
        'alamat',
        'jenis_kelamin',
    ];
    use HasFactory;
    
}
