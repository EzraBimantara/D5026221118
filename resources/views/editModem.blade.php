@extends('master2')
@section('konten')
    <h3>Data Modem</h3>

    <a href="/modem"> Kembali</a>

    <br />
    <br />
    @foreach ($modem as $m)
        <form action="/modem/update" method="post" class="form-horizontal" role="form">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $m->kodemodem }}">
            <div class = "form-group">
                <label for = "merkmodem" class = "col-sm-2 control-label">Merk Modem</label>
                <div class = "col-sm-10">
                    <input required="required" name="merkmodem" type = "text" class = "form-control" id = "merkmodem" value="{{$m->merkmodem}}">
                </div>
            </div>
            <div class = "form-group">
                <label for = "stockmodem" class = "col-sm-2 control-label">Stock Modem</label>
                <div class = "col-sm-10">
                    <input required="required" name="stockmodem" type = "number" class = "form-control" id="stockmodem" value="{{$m->stockmodem}}">
                </div>
            </div>
<div class = "form-group d-flex flex-row">
    <label for = "tersedia" class = "control-label">Ketersedian barang</label>
    <div class="col-1">
        <input type="radio" id="y" name="tersedia" value="y" {{ old('tersedia', $m->tersedia) == 'y' ? 'checked' : '' }}>
        <label for="y">ya</label>
    </div>
    <div class="col-1">
        <input type="radio" id="t" name="tersedia" value="t" {{ old('tersedia', $m->tersedia) == 't' ? 'checked' : '' }}>
        <label for="t">tidak
        </label>
    </div>
</div>


            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>
    @endforeach
@endsection
