<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeminjamanBuku extends Model
{
    protected $table = 'peminjamanbuku';

    public function buku_r() {
        return $this->belongsTo('Databuku', 'buku');
    }
    public function user_r() {
        return $this->belongsTo('App\User','user');
    }
}
