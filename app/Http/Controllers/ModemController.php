<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModemController extends Controller
{
    public function index()
    {
        $modem = DB::table('modem')->paginate(8);
        return view('indexModem',['modem' => $modem]);
    }
    public function tambah(){

        
        return view('tambahModem');
    }

    public function store(Request $request){
        DB::table('modem')-> insert([
            'merkmodem' => $request->merkmodem,
            'stockmodem' => $request->stockmodem,
            'tersedia' => $request->input('tersedia')
        ]);
        return redirect('/modem');
    }


    public function edit($id){
        $modem = DB::table('modem')
                    ->where('kodemodem', $id) 
                    ->get();

        return view('editModem', ['modem' => $modem]);
    }

    public function update(Request $request){

        DB::table('modem')->where('kodemodem', $request->id) -> update([
            'merkmodem' => $request->merkmodem,
            'stockmodem' => $request->stockmodem,
            'tersedia' => $request->input('tersedia')
        ]);
        return redirect('/modem');
    }
    public function hapus($id){
        DB::table('modem')
            ->where('kodemodem', $id)
            ->delete();
       
        return redirect('/modem');
    }

    public function cari(Request $request)
	{
		$cari = $request->cari;

		$modem = DB::table('modem')
                    ->where('merkmodem','like',"%".$cari."%")
                    ->paginate();
		return view('indexModem',['modem' => $modem]);
	}

    public function view($id){
        $modem = DB::table('modem')
                    ->where('kodemodem', $id) 
                    ->get();
        return view('viewModem', ['modem' => $modem]);
    }
}
