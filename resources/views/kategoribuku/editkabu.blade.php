@extends('layouts.display')
@section('title', 'Edit kategori')
@section('content')
<div class="row justify-content-center">
        <div class="col-8">
        <div class="box-header">
        <h3> {{ $title }}</h3>
        </div>
        <br>
        <div class="box-body">

        <form role="form" action="{{ url('beranda/kategoribuku/editkategori/'.$dt->idbuku) }}"
        method="post">
        {{csrf_field()}}
        {{ method_field('put')}}
            <div class="box=body">
                <div class="form-group">
                    <label for="InputKategori">Nama Kategori Buku</label>
                    <input type="text" name="nama" class="form-control"
                    id="InputKategori" placeholder="Masukkan nama kategori buku" value="{{
                        $dt->namakategori }}">
                </div>
            </div>

        <div class="box-footer">
        <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
        </div>
        </form>
    @endsection