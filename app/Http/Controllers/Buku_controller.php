<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Databuku;

class Buku_controller extends Controller
{
    public function index() {
        $title = 'Details Buku';
        $data = \DB::table('data_buku as bk')->join('book_kategori as kg',
        'bk.kategori','=','kg.idbuku')->get();
        // $user = \DB::table('user')->where('name',$name)->get();
        // $data = Databuku::get();
        return view('Buku.detailbuku_index', compact('title','data'));
    }

    public function tambahbuku() {
        $title = 'Tambah Buku';
        $kategori = \DB::table('book_kategori')->get();

        return view('Buku.tambahdatabuku',compact('title','kategori'));
    }

    public function tmbhbuku(Request $request) {
        $judul = $request->judul;
        $stok = $request->stok;
        $kategori = $request->kategori;
        $penulis = $request->penulis;
        
        //menyimpan datafile
        // $file = $request->file('image');
        
        // $destinationPath = 'uploads';
        // $file->move($destinationPath,$file->getClientOriginalName());

        \DB::table('data_buku') -> insert([
            'kategori'=>$kategori,
            // 'cover'=> $file->getClientOriginalName(),
            'judul' => $judul,
            'penulis' => $penulis,
            'stok' => $stok,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect('beranda/databuku');
    }

    public function edit($idbooks){
        $title = 'Edit Details Buku';
        $dt = \DB::table('data_buku')->where('idbooks',$idbooks)->first();
        $kategori = \DB::table('book_kategori')->get();
 
        return view('Buku.edit_databuku',compact('title','dt','kategori'));
    }

    public function update(Request $request, $idbooks) {
        $judul = $request->judul;
        $stok = $request->stok;
        $kategori = $request->kategori;
        $penulis = $request->penulis;
        
        //menyimpan datafile
        // $file = $request->file('image');
        
        // $destinationPath = 'uploads';
        // $file->move($destinationPath,$file->getClientOriginalName());

        \DB::table('data_buku') -> where('idbooks', $idbooks)->update([
            'kategori'=>$kategori,
            // 'cover'=> $file->getClientOriginalName(),
            'judul' => $judul,
            'penulis' => $penulis,
            'stok' => $stok,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect('beranda/databuku');
    }

    public function hapus($idbooks){
        \DB::table('data_buku')->where('idbooks',$idbooks)->delete();
 
        return redirect('beranda/databuku');
    }

    //mengubah status buku
    public function status($idbooks){
        $dt = \DB::table('data_buku')->where('idbooks',$idbooks)->first();
 
        $now_status = $dt->status;
 
        if($now_status == 1){
            \DB::table('data_buku')->where('idbooks',$idbooks)->update([
                'status'=> 0
            ]);
        }else{
            \DB::table('data_buku')->where('idbooks',$idbooks)->update([
                'status'=> 1
            ]);
        }
 
        return redirect('beranda/databuku');
    }
}