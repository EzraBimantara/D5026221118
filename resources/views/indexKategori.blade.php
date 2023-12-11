@extends('master2')

@section('title', 'Pilihan Kategori')

@section('judul_halaman')
    <h2>Kategori</h2>

    <br>
@endsection

@section('konten')
    <form method="GET" action="/kategori/show/{id}">
        @csrf
        <select name="id"> 
            @foreach($kategori as $k)

    <option value="{{ $k->id }}">{{ $k->Nama }}</option>

@endforeach

</select>

        <button type="submit">Submit</button>
    </form>
@endsection

