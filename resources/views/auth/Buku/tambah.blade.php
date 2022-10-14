@extends('layouts.admins')
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-10">
    <div class="card">
    <div class="card-header">
        Tambah Data Buku
    </div>
    <div class="card-body">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $errors }}</li>
                @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('buku.store')}}" method="POST">
            {{csrf_field() }}
            <div class="form-group">
                <label for="id">id Buku</label>
                <input type="text" name="id" class="form-control" id="id"placeholder="Id Buku">
            </div>
            <div class="form-group">
                <label for="Judul">Judul</label>
                <input type="text" name="judul" class="form-control" id="Judul"placeholder="Judul">
            </div>
            <div class="form-group">
                <label for="Pengarang">Pengarang</label>
                <input type="text" name="pengarang" class="form-control" id="pengarang"placeholder="PEngarang">
            </div>
            <div class="form-group">
                <label for="Tahun">Tahun</label>
                <input type="text" name="tahun" class="form-control" id="tahun"placeholder="Tahun">
            </div>
            <div class="form-group">
                <label for="Jumlah">Jumlah</label>
                <input type="text" name="jumlah" class="form-control" id="jumlah"placeholder="Jumlah">
            </div>
            <button type="submit" class="btn btn-primary">Masukkan</button>
            </form>
            </div>
    </div>
    </div>
</div>
</div>


@endsection
    
