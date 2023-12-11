@extends('master2')

@section('title', 'Detail Kategori')

@section('judul_halaman')
    <h2>Detail Kategori</h2>
    
    <br>  
@endsection

@section('konten')

@if($kategori)
   <p>Anda telah memilih kategori dengan kode {{ $kategori->id }}</p> 
@endif

    <div>  
        <a href="/kategori">Kembali</a>
    </div>

@endsection

