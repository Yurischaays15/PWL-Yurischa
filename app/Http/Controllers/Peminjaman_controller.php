<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PeminjamanBuku;

class Peminjaman_controller extends Controller {

    public function index(){
        $title = 'Peminjaman Buku';
        $data = \DB::table('peminjamanbuku as pj')->join('data_buku as db',
        'pj.buku','=','db.idbooks')->get();
 
        return view('peminjaman.index_peminjaman',compact('title','data'));
    }

    public function peminjaman($idbooks) {
        $cek = \DB::table('data_buku')->where('idbooks',$idbooks)->where('stok','>',0)->where('status',1)->count();
 
        if($cek > 0){
            \DB::table('peminjamanbuku')->insert([
                'buku'=>$idbooks,
                'user'=>\Auth::user()->name,
                'created_at'=>date('Y-m-d H:i:s')
                ]);
 
            $buku = \DB::table('data_buku')->where('idbooks',$idbooks)->first();
            $jumlah_now = $buku->stok;
            $jumlah_new = $jumlah_now - 1;
 
            \DB::table('data_buku')->where('idbooks',$idbooks)->update([
                'stok'=>$jumlah_new
            ]);
 
            return redirect('beranda/databuku');
        }else{
            return redirect('beranda/databuku');

        }
    }
    public function hapus1($idpinjam){
    \DB::table('peminjamanbuku')->where('idpinjam',$idpinjam)->delete();

    return redirect('beranda/peminjaman');
        }
    }