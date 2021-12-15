<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Halaman awal
Route::get('/', function () {
    return view('welcome');
});

// Tugas 4
Route::get('/tugas4', function () {
    return view('tugas4');
});

// Praktikum 2
Route::get('/praktikum2', function () {
    return view('praktikum2');
});

// ETS
Route::get('ets',"ViewController@showEts") ;

// Tugas PHP
Route::get('tugas5',"ViewController@showForm") ;
Route::post('hasiltugas5',"ViewController@resultGreetings");

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/view/{id}','PegawaiController@detail');

//route CRUD untuk tugas week 13 (25 November 2021)
Route::get('/pendapatan','PendapatanController@index');
Route::get('/pendapatan/tambah','PendapatanController@tambah');
Route::post('/pendapatan/store','PendapatanController@store');
Route::get('/pendapatan/edit/{id}','PendapatanController@edit');
Route::post('/pendapatan/update','PendapatanController@update');
Route::get('/pendapatan/hapus/{id}','PendapatanController@hapus');
Route::get('/pendapatan/cari','PendapatanController@cari');
Route::get('/pendapatan/view/{id}','PendapatanController@detail');
Route::get('/pendapatan/cari','PendapatanController@cari');
Route::get('/pendapatan/view/{id}','PendapatanController@detail');

//route CRUD absen
Route::get('/absen','AbsenController@indexabsen');
Route::get('/absen/add','AbsenController@add');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/cari','AbsenController@cari');
Route::get('/absen/view/{id}','AbsenController@detail');

//route CRUD tabel minuman - Praktikum Modul 3 (9 November 2021)
Route::get('/minuman','MinumanController@index');
Route::get('/minuman/add','MinumanController@add');
Route::post('/minuman/store','MinumanController@store');
Route::get('/minuman/edit/{id}','MinumanController@edit');
Route::post('/minuman/update','MinumanController@update');
Route::get('/minuman/hapus/{id}','MinumanController@hapus');
Route::get('/minuman/cari','MinumanController@cari');
Route::get('/minuman/view/{id}','MinumanController@detail');

//route CRUD tabel karyawan 1 - EAS (15 Desember 2021)
Route::get('/karyawan1','Karyawan1Controller@index');
Route::get('/karyawan1/edit/{id}','Karyawan1Controller@edit');
Route::post('/karyawan1/update','Karyawan1Controller@update');
Route::get('/karyawan1/view/{id}','Karyawan1Controller@detail');
