@extends('layouts.admins')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
        <div class="card">
        <div class="card-header">
            <a href="{{route('buku.create')}}" class="btn btn-warning float-lg-right">Tambah Buku</a>
            Data Buku 
        </div>
        <div class="card-body">
        <table class="table table-striped" id="Tablekucok"> 
            <thead>
            <tr>
                <th>id Buku</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($datas as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->judul}}</td>
                <td>{{$data->pengarang}}</td>
                <td>{{$data->penerbit}}</td>
                <td>{{$data->tahun}}</td>
                <td>
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                    action="{{ route('buku.destroy', $data->id) }}" method="POST">
                    <a href="{{ route('buku.edit', $data->id) }}"
                    class="btn btn-sm btn-info shadow">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger shadow">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
        </div>
    </div>
</div>


@endsection
    
