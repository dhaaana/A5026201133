<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MinumanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table minuman
        $minuman = DB::table('minuman')->paginate(5);

    	// mengirim data minuman ke view index
    	return view('minuman.index',['minuman' => $minuman]); // Teknik komunikasi / passing value antara controller dan view
    }

    // method untuk menampilkan view form tambah minuman
    public function add()
    {
	    // memanggil view tambah
	    return view('minuman.tambah');
    }

    // method untuk insert data ke table minuman
    public function store(Request $request)
    {
	// insert data ke table pegawai
	    DB::table('minuman')->insert([
		    'merkminuman' => $request->merk,
		    'stockminuman' => $request->stock,
		    'tersedia' => $request->tersedia,
	    ]);
	    // alihkan halaman ke halaman minuman
	    return redirect('/minuman'); // tidak return view, karena jadi tidak fleksibel
    }

    // method untuk edit data minuman
    public function edit($id)
    {
	    // mengambil data minuman berdasarkan id yang dipilih
	    $minuman = DB::table('minuman')->where('kodeminuman',$id)->get();
	    // passing data minuman yang didapat ke view edit.blade.php
	    return view('minuman.edit',['minuman' => $minuman]);

    }

    // method untuk melihat detail data minuman
    public function detail($id)
    {
	    // mengambil data minuman berdasarkan id yang dipilih
	    $minuman = DB::table('minuman')->where('kodeminuman',$id)->get();
	    // passing data minuman yang didapat ke view edit.blade.php
	    return view('minuman.detail',['minuman' => $minuman]);

    }

    // update data minuman
    public function update(Request $request)
    {
	    // update data minuman
	    DB::table('minuman')->where('kodeminuman',$request->id)->update([
		    'merkminuman' => $request->merk,
		    'stockminuman' => $request->stock,
		    'tersedia' => $request->tersedia,
	    ]);
	    // alihkan halaman ke halaman minuman
	    return redirect('/minuman');
    }

    // method untuk hapus data minuman
    public function hapus($id)
    {
        // menghapus data minuman berdasarkan id yang dipilih
        DB::table('minuman')->where('kodeminuman',$id)->delete();

        // alihkan halaman ke halaman minuman
        return redirect('/minuman');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table minuman sesuai pencarian data
		$minuman = DB::table('minuman')
		->where('merkminuman','like',"%".$cari."%")
		->paginate();

    	// mengirim data minuman ke view index
		return view('minuman.index',['minuman' => $minuman]);

	}
}
