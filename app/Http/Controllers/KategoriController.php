<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KategoriController extends Controller
{

    public function index()
    {
        // Mengambil data kategori dari database
        $kategori = DB::table('kategori')->get();

        // Menampilkan halaman dengan data kategori yang diambil
        return view('indexkategori', ['kategori' => $kategori]);
    }

    public function pilih(Request $request)
    {
        // Menangkap ID kategori yang dipilih dari combo box
        $selectedKategoriId = $request->input('kategori');

        // Mengambil nama kategori berdasarkan ID yang dipilih
        $kategoriNama = DB::table('kategori')->where('id', $selectedKategoriId)->value('Nama');

        // Menampilkan halaman dengan konfirmasi kategori yang dipilih
        return view('ShowKategori', [
            'selectedKategoriId' => $selectedKategoriId,
        ]);
    }

}

kontroll
