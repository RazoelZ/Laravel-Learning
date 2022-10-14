@extends('layouts.admins')
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-10">
    <div class="card">
    <div class="card-header">
        INput Data Admin
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
        <form action="{{route('admin.store')}}" method="POST">
            {{csrf_field() }}
            <div class="form-group">
                <label for="id">id_pegawai</label>
                <input type="text" name="id" class="form-control" id="id"placeholder="Id Pegawai">
            </div>
            <div class="form-group">
                <label for="Nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="Nama"placeholder="Nama">
            </div>
            <div class="form-group">
                <label for="jenis">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="">
                    <option value = "">--Choose--</option>
                    <option value = "Pria">Pria</option>
                    <option value = "Wanita">Wanita</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Nomor Handphone">Nomor Handphone</label>
                <input type="text" name="no_hp" class="form-control" id="alamat"placeholder="Nomor Handphone">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat"placeholder="Alamat">
            </div>
            <button type="submit" class="btn btn-primary">Masukkan</button>
            </form>
            </div>
    </div>
    </div>
</div>
</div>


@endsection
    
