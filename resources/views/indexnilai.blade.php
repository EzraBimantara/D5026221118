@extends ('master2')
@section('title', 'Database Nilai Mahasiswa')
@section ('judul_halaman')
 
	<h2>www.malasngoding.com</h2>
	<h3>Data  Mahasiswa</h3>
 
	<a href="/nilaikuliah/tambahnilai"> + Tambah Record Baru</a>
	
	<br/>
	<br/>
 @endsection
 @section('konten')
 <table class="table table-stripped table-hover">
		<tr>
        <th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
            <th>NilaiHuruf</th>
            <th>Bobot</th>
			
		</tr>
		@foreach($nilaikuliah as $nk)
		<tr>
        <td>{{ $nk->ID}}</td>
			<td>{{ $nk->NRP}}</td>
			<td>{{ $nk->NilaiAngka }}</td>
			<td>{{ $nk->SKS}}</td>
            <td>
                @if($nk->NilaiAngka <= 40)
                D
                @elseif($nk->NilaiAngka <= 60)
                C
                @elseif($nk->NilaiAngka <= 80)
                B
                @else
                A
                @endif
            </td>
            <td>{{$nk->NilaiAngka*$nk->SKS}} </td>
		@endforeach
	</table>
	@endsection