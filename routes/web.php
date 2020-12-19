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

Route::get('/', function () {
    return view('halaman_depan');
});

Route::group(['middleware'=>'auth'], function() {
    Route::get('beranda','Beranda_controller@index');

    //kategoribuku
    Route::get('beranda/kategoribuku','Kategori_controller@index');
    Route::get('beranda/kategoribuku/formkabu','Kategori_controller@tambahkategori');
    Route::post('beranda/kategoribuku/formkabu','Kategori_controller@insert');
    Route::get('beranda/kategoribuku/editkategori/{idbuku}','Kategori_controller@edit');
    Route::put('beranda/kategoribuku/editkategori/{idbuku}','Kategori_controller@update');
    Route::get('beranda/kategoribuku/{idbuku}','Kategori_controller@hapus');

    //detailsbuku
    Route::get('beranda/databuku','Buku_controller@index');
    Route::get('beranda/databuku/tambahdatabuku','Buku_controller@tambahbuku');
    Route::post('beranda/databuku/tambahdatabuku','Buku_controller@tmbhbuku');
    Route::get('beranda/databuku/edit/{idbooks}','Buku_controller@edit');
    Route::put('beranda/databuku/edit/{idbooks}','Buku_controller@update');
    Route::delete('beranda/databuku/{idbooks}','Buku_controller@hapus');
    Route::get('beranda/databuku/{idbooks}','Buku_controller@status');


    // peminjaman buku
    Route::get('beranda/peminjaman/{idpinjam}','Peminjaman_controller@peminjaman');
    Route::get('beranda/peminjaman','Peminjaman_controller@index');
    Route::delete('beranda/peminjaman/{idpinjam}','Peminjaman_controller@hapus1');
});

//route keluar
Route::get('keluar', function() {
    \Auth::logout();
    return redirect('login');
});

Auth::routes();

Route::get('/home', function() {
    return redirect('beranda');
});