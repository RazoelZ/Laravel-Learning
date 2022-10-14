@extends('layouts.admins')
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">DataTable with minimal features & hover style</h3>
            </div>
            <div class="card-body">
                    <form action="{{route('peminjaman.store')}}" method="POST">
                {{csrf_field() }}
                    <h3>Nama Peminjam</h3>
                <div class="form-group">
                    <label for="id_anggota">id Anggota</label>
                    <input type="text" name="id_anggota" class="form-control" id="id_anggota"placeholder="Id Anggota">
                </div>
                    <h3>Peminjaman</h3>
                <div class="form-group">
                    <label for="nomor_peminjaman">Nomor Peminjaman</label>
                    <input type="text" name="nomor_peminjaman" class="form-control" id="nomor_peminjaman"placeholder="Nomor Peminjaman">
                </div>
                <div class="form-group">
                    <label for="tanggal_pinjam">Tanggal Peminjaman</label>
                    <input type="date" name="tanggal_pinjam" class="form-control" id="tanggal_pinjam"placeholder="Tanggal Peminjaman">
                </div>
                <div class="form-group">
                    <label for="tanggal_kembali">Lama Peminjaman</label>
                    <input type="text" name="lama" class="form-control" id="lama"placeholder="Lama Peminjaman">
                </div>
                <div class="form-group">
                    <label for="lama">Tanggal Kembali</label>
                    <input type="date" name="tanggal_kembali" class="form-control" id="tanggal_kembali"placeholder="Tanggal Kembali">
                </div>
                    <div class="form-group">
                    <label for="id_pegawai">Kode Admin</label>
                    <input type="text" name="id_pegawai" class="form-control" id="id_pegawai"placeholder="Kode Admin">
                </div>
                <button type="submit" class="btn btn-primary">Masukkan</button>
                
            </div>
        </div>
    </div>
    <div class="colmd6">
        <div class="card">
        <div class="card-header">
        <h3 class="card-title">DataTable with minimal features & hover style</h3>
        </div>
            <div class="card-body">
                <table class="table" id="tabelbuku">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Buku</th>
                            <th>Judul</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php 
                        $no = 1
                        @endphp
                        @foreach($buku as $item)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$item->id}}</td>
                            <td>{{$item->judul}}</td>
                            <td>{{$item->jumlah}}</td>
                        </tr>
                        @php 
                        $no++
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            <div class="card-header">
            <h3 class="card-title">DataTable with minimal features & hover style</h3>
            </div>
                </div>
                    <div class="form-group">
                    <label for="id_buku">Kode Buku</label>
                    <input type="text" name="id_buku" class="form-control" id="id_buku"placeholder="Kode Buku">
                </div>
            </form>
            {{csrf_field()}}
            </div>
            </div>
        </div>
    </div>
    
</div>
</div>
@endsection
@stack('scripts')
    <script>
        $(document).ready(function(){
            $('#tabelbuku').DataTable();
            $('.dinamis').change(function(){
                if($this.val!=''){
                    var pilih = $(this).attr('id')
                    var nilai = $(this).val()
                    var depend=$(this).data('dependent')
                    var token('input[name=_token]'.val());
                    $.ajax({
                        url : "{{route('jabar')}}",
                        method='POST',
                        data : {pilih: pilih, nilai : nilai, depend: depend, _token:token},
                        success::function(res){
                            $('#'+depend).html(res)
                        }
                    })
                }
            })
        })
    </script>
