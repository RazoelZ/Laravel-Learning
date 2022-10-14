@extends('layouts.admins')
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-10">
    <a href="{{route('peminjaman.create')}}" class="btn btn-warning float-lg-right">Tambah Peminjaman</a>
    <div class="card">
    <div class="card-header">
        Edit Data Peminjaman
    </div>
    <div class="card-body">
    {!! Form::model($data, ['route'=> ['peminjaman.update',$data], 'method'=>'PUT']) !!}

    <div class="form-group">
    {!! Form::text('idpeminjaman', null, ['class'=>'form-control','id'=>'idpeminjaman']) !!}
    </div>
    <div class="form-group">
    {!! Form::text('nomor_peminjaman', null, ['class'=>'form-control','id'=>'nomor_peminjaman']) !!}
    </div>
    <div class="form-group">
                <label for="jenis">Status Peminjaman</label>
                <select name="statuspeminjaman" id="">
                    <option value = "">--Choose--</option>
                    <option value = "Sedang">Sedang</option>
                    <option value = "Dikembalikan">Dikembalikan</option>
        </select>
    </div>
    </div>
    <div class="form-group">
    {!! Form::submit('Simpan', ['class'=>"btn btn-primary"]) !!}
    </div>
{!! Form::close()!!}
    </div>
</div>
    </div>
</div>
</div>


@endsection
    

