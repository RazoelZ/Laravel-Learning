@extends('layouts.admins')
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-10">
    <a href="{{route('buku.create')}}" class="btn btn-warning">Tambah Admin</a>
    <div class="card">
    <div class="card-header">
        Edit Buku
    </div>
    <div class="card-body">
    {!! Form::model($data, ['route'=> ['buku.update',$data], 'method'=>'PUT']) !!}

    <div class="form-group">
    {!! Form::text('id', null, ['class'=>'form-control','id'=>'id']) !!}
    </div>
    <div class="form-group">
    {!! Form::text('judul', null, ['class'=>'form-control','id'=>'judul']) !!}
    </div>
    <div class="form-group">
    {!! Form::text('penerbit', null, ['class'=>'form-control','id'=>'penerbit']) !!}
    </div>
    <div class="form-group">
    {!! Form::text('tahun', null, ['class'=>'form-control','id'=>'tahun']) !!}
    </div>
    <div class="form-group">
    {!! Form::text('jumlah', null, ['class'=>'form-control','id'=>'jumlah']) !!}
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
    

