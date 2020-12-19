<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kategori_controller extends Controller
{
    public function index() {
        $title = 'kategori buku';
        $data = \DB::table('book_kategori')->get();

        return view('kategoribuku.kategori_index', compact('title','data'));
    }

    //menambahkan kategori
    public function tambahkategori() {
        $title = 'Tambah Kategori';

        return view('kategoribuku.formkabu',compact('title'));
    }

    //menampilkan kategori berdasarkan inputan user
    public function insert(Request $request) {
        $nama = $request ->nama;

        \DB::table('book_kategori') -> insert([
            'namakategori' => $nama,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect('beranda/kategoribuku');
    }

    //editkategoribuku
    public function edit($idbuku) {
        $dt = \DB::table('book_kategori') ->where('idbuku',$idbuku)->first();
        $title = 'Edit Kategori';

        return view('kategoribuku/editkabu',compact('title','dt'));
    }

    public function update(Request $request, $idbuku) {
        $nama = $request ->nama;

        \DB::table('book_kategori') ->where('idbuku', $idbuku)->update([
            'namakategori' => $nama,
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect('beranda/kategoribuku');
    }

    //menghapus data kategori berdasarkan id
    public function hapus($idbuku) {
        \DB::table('book_kategori') ->where('idbuku',$idbuku)->delete();

        return redirect('beranda/kategoribuku');
    }
}
    

    