@extends('master2')
@section('konten')
 
	<h3>Data Pegawai</h3>
 
	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		<div class="form-horizontal">
    <div class="form-group">
        <label for="nama" class="col-sm-2 control-label">Nama</label>
        <div class="col-sm-10">
            <input name="nama" type="text" class="form-control" id="nama" placeholder="Nama Pegawai">
        </div>
    </div>

    <div class="form-group">
        <label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
        <div class="col-sm-10">
            <input name="jabatan" type="text" class="form-control" id="jabatan" placeholder="Jabatan Pegawai">
        </div>
    </div>

    <div class="form-group">
        <label for="umur" class="col-sm-2 control-label">Umur</label>
        <div class="col-sm-10">
            <input name="umur" type="number" class="form-control" id="umur" placeholder="Umur Pegawai">
        </div>
    </div>

    <div class="form-group">
        <label for="alamat" class="col-sm-2 control-label">Alamat</label>
        <div class="col-sm-10">
            <textarea name="alamat" class="form-control" id="alamat" placeholder="Alamat Pegawai"></textarea>
        </div>
    </div>
</div>

<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
 
@endsection