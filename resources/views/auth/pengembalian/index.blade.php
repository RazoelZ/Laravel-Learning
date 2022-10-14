@extends('layouts.admins')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
        <div class="card">
        <div class="card-header">
            Data Buku
        </div>
        <div class="card-body">
        <table class="table table-striped" id="Tablekucok"> 
            <thead>
            <tr>
                <th>Nomor Peminjaman</th>
                <th>Nama Peminjam</th>
                <th>Kode Buku</th>
                <th>Waktu Peminjaman</th>
                <th>Harus Dikembalikan</th>
                <th>Denda</th>
            </tr>
            </thead>
            <tbody>
            @foreach($datas as $data)
            <tr>
                <td>{{$data->nomor_peminjaman}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->id_buku}}</td>
                <td>{{$data->tanggal_pinjam}}</td>
                <td>{{$data->tanggal_kembali}}</td>
                @php 
                $then = ($data->tanggal_kembali);
                $then = new DateTime($then);
                $now = new DateTime();
                
                $denda = $then->diff($now);
                $denda = $denda->format('%R%a');
                if ($denda<=0){
                    $denda = 0;
                } else{
                    $denda = $denda*3000;
                }
                @endphp
                <td>{{$denda}}</td>
                
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
        </div>
    </div>
</div>


@endsection
    
