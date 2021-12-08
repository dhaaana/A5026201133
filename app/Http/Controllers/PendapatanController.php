<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PendapatanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pendapatan
    	$pendapatan = DB::table('pendapatan')->get();

    	// mengirim data pegawai ke view index
    	return view('pendapatan.index',['pendapatan' => $pendapatan]);

    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get(); //defaultnya urut Primary Key

	    // memanggil view tambah
	    return view('pendapatan.tambah', ['pegawai' => $pegawai]);

    }

    // method untuk insert data ke table pendapatan
    public function store(Request $request)
    {
	// insert data ke table pegawai
	    DB::table('pendapatan')->insert([
		    'IDPegawai' => $request->idpegawai,
		    'Bulan' => $request->bulan,
		    'Tahun' => $request->tahun,
		    'Gaji' => $request->gaji,
            'Tunjangan' => $request->tunjangan
	    ]);
	    // alihkan halaman ke halaman pendapatan
	    return redirect('/pendapatan');

    }

    // method untuk edit data pendapatan
    public function edit($id)
    {
	    // mengambil data pendapatan berdasarkan id yang dipilih
	    $pendapatan = DB::table('pendapatan')->where('ID',$id)->get();

        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get(); //defaultnya urut Primary Key

	    // passing data pendapatan yang didapat ke view edit.blade.php
	    return view('pendapatan.edit',['pendapatan' => $pendapatan, 'pegawai' => $pegawai]);

    }

    // update data pendapatan
    public function update(Request $request)
    {
	    // update data pendapatan
	    DB::table('pendapatan')->where('ID',$request->id)->update([
		    'IDPegawai' => $request->idpegawai,
		    'Bulan' => $request->bulan,
		    'Tahun' => $request->tahun,
		    'Gaji' => $request->gaji,
            'Tunjangan' => $request->tunjangan
	    ]);
	    // alihkan halaman ke halaman pendapatan
	    return redirect('/pendapatan');
    }

    // method untuk hapus data pendapatan
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pendapatan')->where('ID',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/pendapatan');
    }
}
