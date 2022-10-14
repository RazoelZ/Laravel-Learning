<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Kembali extends Model
{
    use HasFactory;
    protected $table = "kembalis",
    $fillable = ['id', 'nomor_peminjaman', 'tanggal_pengembalian', 'status', 'keterangan'];

    public static function join(){
        $data =
        DB::table('kembalis')
        ->join('peminjamen','kembalis.nomor_peminjaman','=', 'peminjamen.id')
        ->join('admins', 'kembalis.admin', '=', 'admins.id')
        ->join('anggotas', 'peminjamen.id.anggota', '=', 'anggotas.id')
        ->select('kembalis.*','peminjamen.*','anggotas.*','pegawais.nama')
        ->get();
        return $data;

    }
}
