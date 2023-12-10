@extends('master2')
@section('title', 'Database Modem')

@section('judul_halaman')
    <h2>Data Modem</h2>

    <a href="/modem/tambah" class="btn btn-primary"> + Tambah Modem </a>
    <br>
@endsection
@section('konten')
<p>Cari Merk Modem :</p>
	<form action="/modem/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari nama " value="{{ old('cari') }}">
		<br/>
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>
    <br>
    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Modem</th>
            <th>Merk Modem</th>
            <th>Stock Modem</th>
            <th>Ketersediaan Modem</th>
            <th>Opsi</th>
        </tr>
        @foreach ($modem as $m)
            <tr>
                <td>{{ $m ->kodemodem}}</td>
                <td>{{ $m ->merkmodem}}</td>
                <td>@if ($m->stockmodem < 5)
    <span style="color: red;">{{ $m->stockmodem }}</span>
    <span title="segera isi ulang stok dan update datanya">&#9432;</span>
@else
    {{ $m->stockmodem }}
@endif
</td>
                <td class="text-center">
    @if ($m->tersedia == 'y')
        <div style="background-color: green; color: white;">Y</div>
    @else
        <div style="background-color: red; color: white;">T</div>
    @endif
</td>
                <td>
					<a href="/modem/view/{{ $m->kodemodem }}" class="btn btn-success">View</a>
					|
                    <a href="/modem/edit/{{ $m->kodemodem }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/modem/hapus/{{ $m->kodemodem }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $modem->links() }}
@endsection