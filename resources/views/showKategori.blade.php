@extends('master2')

@section('title', 'Konfirmasi Kategori')

@section('konten')
<div class="container mt-4">
    <div class="alert alert-info" role="alert">
        Anda telah memilih Kategori dengan Kode: {{ $selectedKategoriId }}
    </div>
</div>
@endsection

