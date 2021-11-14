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
