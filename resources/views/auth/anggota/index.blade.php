@extends('layouts.admins')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
        
        <div class="card">
        <div class="card-header">
            Data anggota 
            <a href="{{route('anggota.create')}}" class="btn btn-warning float-lg-right">Tambah anggota</a>
        </div>
        <div class="card-body">
        <table class="table table-striped" id="Tablekucok"> 
            <tr>
                <th>id Anggota</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>NO HP</th>
                <th>Alamat</th>
                <th>Statuys Pinjam</th>
                <th>Aksi</th>
            </tr>
            @foreach($datas as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->jenis_kelamin}}</td>
                <td>{{$data->no_hp}}</td>
                <td>{{$data->alamat}}</td>
                <td>{{$data->Status_Pinjam}}</td>
                <td>
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                    action="{{ route('anggota.destroy', $data->id) }}" method="POST">
                    <a href="{{ route('anggota.edit', $data->id) }}"
                    class="btn btn-sm btn-info shadow">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger shadow">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        </div>
    </div>
        </div>
    </div>
</div>


@endsection
    
