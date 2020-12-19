@extends('layouts.display')
@section('title', 'form tambah kategori')
@section('content')
<div class="row justify-content-center">
        <div class="col-8">
        <div class="box-header">
        <h3> {{ $title }}</h3>
        </div>
        <br>
        <div class="box-body">

        <form role="form" action="{{ url('beranda/kategoribuku/formkabu') }}"
        method="post">
        {{csrf_field()}}
            <div class="box=body">
                <div class="form-group">
                    <label for="InputKategori">Nama Kategori Buku</label>
                    <input type="text" name="nama" class="form-control"
                    id="InputKategori" placeholder="Masukkan nama kategori buku">
                </div>
        <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
    @endsection