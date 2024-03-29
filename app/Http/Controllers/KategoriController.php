<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KategoriController extends Controller
{

    public function index()
    {
    
        $kategori = DB::table('kategori')->get();

       
        return view('indexkategori', ['kategori' => $kategori]);
    }

    public function pilih(Request $request)
    {
         $selectedKategoriId = $request->input('kategori');


        
        return view('ShowKategori', [
            'selectedKategoriId' => $selectedKategoriId,
        ]);
    }

}