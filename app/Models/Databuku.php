<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Databuku extends Model
{
    protected $table = 'data_buku';

    public function kategori_r(){
        return $this->belongsTo('App\Models\Book_kategori','kategori');
    }
}
