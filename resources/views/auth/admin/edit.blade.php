@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-10">
    <a href="{{route('admin.create')}}" class="btn btn-warning">Tambah Admin</a>
    <div class="card">
    <div class="card-header">
        Edit Data Admin
    </div>
    <div class="card-body">
    {!! Form::model($data, ['route'=> ['admin.update',$data], 'method'=>'PUT']) !!}

    <div class="form-group">
    {!! Form::text('id', null, ['class'=>'form-control','id'=>'id']) !!}
    </div>
    <div class="form-group">
    {!! Form::text('nama', null, ['class'=>'form-control','id'=>'namai']) !!}
    </div>
    <div class="form-group">
                <select name="jenis_kelamin" id="">
                    <option {{old('jenis_kelamin',$data->jenis_kelamin)=="Pria"? 'selected':''}}value = "Pria">Pria</option>
                    <option {{old('jenis_kelamin',$data->jenis_kelamin)=="Wanita"? 'selected':''}}value = "Wanita">Wanita</option>
                </select>
    </div>
    <div class="form-group">
    {!! Form::text('no_hp', null, ['class'=>'form-control','id'=>'no_hp']) !!}
    </div>
    <div class="form-group">
    {!! Form::text('alamat', null, ['class'=>'form-control','id'=>'alamat']) !!}
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
    

