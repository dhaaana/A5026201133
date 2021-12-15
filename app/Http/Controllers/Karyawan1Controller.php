<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Karyawan1Controller extends Controller
{
    public function index()
    {
    	// mengambil data dari table karyawan
        $karyawan1 = DB::table('karyawan1')->paginate(5);

    	// mengirim data karyawan ke view index
    	return view('karyawan1.index',['karyawan1' => $karyawan1]); // Teknik komunikasi / passing value antara controller dan view
    }

    // method untuk edit data karyawan
    public function edit($id)
    {
	    // mengambil data karyawan berdasarkan id yang dipilih
	    $karyawan1 = DB::table('karyawan1')->where('NIP',$id)->get();
	    // passing data karyawan yang didapat ke view edit.blade.php
	    return view('karyawan1.edit',['karyawan1' => $karyawan1]);

    }

    // method untuk melihat detail data karyawan
    public function detail($id)
    {
	    // mengambil data karyawan berdasarkan id yang dipilih
	    $karyawan1 = DB::table('karyawan1')->where('NIP',$id)->get();
	    // passing data karyawan yang didapat ke view edit.blade.php
	    return view('karyawan1.detail',['karyawan1' => $karyawan1]);

    }

    // update data karyawan
    public function update(Request $request)
    {
	    // update data karyawan
	    DB::table('karyawan1')->where('NIP',$request->oldnip)->update([
		    'NIP' => $request->nip,
		    'Nama' => $request->nama,
		    'Pangkat' => $request->pangkat,
            'Gaji' => $request->gaji,
	    ]);
	    // alihkan halaman ke halaman karyawan
	    return redirect('/karyawan1');
    }
}
