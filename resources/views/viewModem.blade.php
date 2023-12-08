@extends('master2')

@section('judul_halaman')
    <h3>View Modem</h3>

    <a href="/modem"> Kembali</a>

    <br />
    <br />
@endsection

@section('konten')
    <div class="row">
        <div class="col-3"></div>
        <div class="col-9">
            @foreach ($modem as $m)
            <fieldset disabled>
                <form action="/modem/update" method="post" class="form-horizontal " role="form">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $m->kodemodem }}">
                    <div class = "form-group row">
                        <label for = "merkmodem" class = "col-sm-2 control-label align-self-center">Merk modem:</label>
                        <div class = "col-sm-10">
                            <input type="merkmodem" required="required" name="merkmodem" value="{{ $m->merkmodem }}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class = "form-group row">
                        <label for = "stockmodem" class = "col-sm-2 control-label align-self-center">Stock Modem:</label>
                        <div class = "col-sm-10">
                            <input type="number" required="required" name="jabatan" value="{{ $m->stockmodem }}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class = "form-group row">
                    <label for="tersedia" class="control-label" style="width: 200px; height: 30px;">Ketersedian barang</label>
<div class="col-1">
    <input type="radio" id="y" name="tersedia" value="y" {{ $m->tersedia == 'y' ? 'checked' : '' }} disabled style="width: 20px; height: 20px;">
    <label for="y" class="radio-label" style="margin-left: 10px; font-size: 16px; color: black;">ya</label><br>
</div>
<div class="col-1">
    <input type="radio" id="t" name="tersedia" value="t" {{ $m->tersedia == 't' ? 'checked' : '' }} disabled style="width: 20px; height: 20px;">
    <label for="t" class="radio-label" style="margin-left: 10px; font-size: 16px; color: black;">tidak</label><br>
</div>

</div>

                </form>
            </fieldset>
            @endforeach
            <div class="text-center" >
                <a href="/modem" class="btn btn-primary w-25">Kembali</a>
            </div>
        </div>
    </div>

@endsection