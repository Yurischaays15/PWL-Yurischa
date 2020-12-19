@extends('layouts.display')
@section('title', 'Edit Details Buku')
@section('content')
<div class="row justify-content-center">
        <div class="col-6">
            <div class="box box-warning">
                <div class="box-header">
        <h3> {{ $title }}</h3>
        </div>
        <br>
        <div class="box-body">

        <form role="form" action="{{ url('beranda/databuku/edit/'.$dt->idbooks)}}" method="post" 
        enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('put')}}
        <div class="box-body">
        <div class="formkt">
            <label for="inputkategori">Judul Buku</label>
            <input type="text" name="judul" value="{{ $dt->judul }}" 
            class="form-control" id="inputkategori" placeholder="Judul Buku...">
        </div><br>
        <div class="formkt">
        <label for="inputkategori">Kategori Buku</label>
            <select class="form-control select" name="kategori">
            <option selected="" disabled="">Kategori Buku...</option>
            @foreach($kategori as $ktg)
            <option value="{{ $ktg->idbuku }}" {{ ($dt->kategori == $ktg->idbuku) ? 
            'selected' : '' }}>{{ $ktg->namakategori }}</option>
            @endforeach
            </select>
        </div><br>
        <div class="formkt">
            <label for="inputkategori">Nama Penulis</label>
            <input type="text" name="penulis" value="{{ $dt->penulis }}" 
            class="form-control" id="inputkategori" placeholder="Nama Penulis...">
        </div><br>
        <div class="formkt">
            <label for="inputkategori">Stok Buku</label>
            <input type="number" name="stok" value="{{ $dt->stok }}" 
            class="form-control" id="inputkategori" placeholder="Stok buku...">
        </div><br>
        <!-- <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" name="image" id="exampleInputFile">
        </div>
        <br> -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </form>
            </div>
        </div>
    </div>
</div>
 
@endsection
