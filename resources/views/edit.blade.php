
@extends('master2')
@section('konten')
	<h3>Edit Pegawai</h3>
 
	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post" class="form-horizontal">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
    
    <div class="form-group">
        <label for="nama" class="col-sm-2 control-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" required="required" name="nama" value="{{ $p->pegawai_nama }}">
        </div>
    </div>

    <div class="form-group">
        <label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
        </div>
    </div>

    <div class="form-group">
        <label for="umur" class="col-sm-2 control-label">Umur</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" required="required" name="umur" value="{{ $p->pegawai_umur }}">
        </div>
    </div>

    <div class="form-group">
        <label for="alamat" class="col-sm-2 control-label">Alamat</label>
        <div class="col-sm-10">
            <textarea class="form-control" required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea>
        </div>
    </div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
	@endforeach
		
 
@endsection