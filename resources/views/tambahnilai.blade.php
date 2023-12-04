@extends('master2')
@section('konten')
 
	<h3>Data Pegawai</h3>
 
	<a href="/nilaikuliah"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/nilaikuliah/masukkan" method="post">
		{{ csrf_field() }}
		<div class="form-horizontal">
    <div class="form-group">
        <label for="ID" class="col-sm-2 control-label">ID</label>
        <div class="col-sm-10">
            <input name="ID" type="hidden" class="form-control" id="ID" placeholder="ID">
        </div>
    </div>

    <div class="form-group">
        <label for="NRP" class="col-sm-2 control-label">NRP</label>
        <div class="col-sm-10">
            <input name="NRP" type="number" class="form-control" id="NRP" placeholder="NRP">
        </div>
    </div>

    <div class="form-group">
        <label for="NilaiAngka" class="col-sm-2 control-label">Nilai Angka (0-100) </label>
        <div class="col-sm-10">
            <input name="NilaiAngka" type="number" class="form-control" id="NilaiAngka" placeholder="NilaiAngka">
        </div>
    </div>

    <div class="form-group">
        <label for="SKS" class="col-sm-2 control-label"> SKS</label>
        <div class="col-sm-10">
            <textarea name="SKS" type="number"  class="form-control" id="SKS" placeholder="SKS"></textarea>
        </div>
    </div>
</div>

<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
 
@endsection