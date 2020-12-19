@extends('layouts.display')
@section('title', 'Form tambah data buku')
@section('content')
<div class="row justify-content-center">
        <div class="col-6">
            <div class="box box-warning">
                <div class="box-header">
        <h3> {{ $title }}</h3>
        </div>
        <br>
        <div class="box-body">

        <form role="form" action="{{ url('beranda/databuku/tambahdatabuku')}}" method="post" 
        enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="box-body">
        <div class="formkt">
            <label for="inputkategori">Judul Buku</label>
            <input type="text" name="judul" class="form-control" id="inputkategori" placeholder="Judul Buku...">
        </div><br>
        <div class="formkt">
        <label for="inputkategori">Kategori Buku</label>
            <select class="form-control select" name="kategori">
            <option selected="" disabled="">Kategori Buku...</option>
            @foreach($kategori as $ktg)
            <option value="{{$ktg->idbuku}}">{{ $ktg -> namakategori }}</option>
            @endforeach
            </select>
        </div><br>
        <div class="formkt">
            <label for="inputkategori">Nama Penulis</label>
            <input type="text" name="penulis" class="form-control" id="inputkategori" placeholder="Nama Penulis...">
        </div><br>
        <div class="formkt">
            <label for="inputkategori">Stok Buku</label>
            <input type="number" name="stok" class="form-control" id="inputkategori" placeholder="Stok buku...">
        </div><br>
        <!-- <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" name="image" id="exampleInputFile">
        </div>
        <br> -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
            </div>
        </div>
    </div>
</div>
 
@endsection
