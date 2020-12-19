<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Beranda_controller extends Controller
{
    public function index() {
        $title = 'Admin';

        return view('beranda.index_beranda', compact('title'));
    }
}