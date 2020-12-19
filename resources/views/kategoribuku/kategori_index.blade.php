@extends('layouts.display')

@section('title', 'Kategori')

@section('content')
<div class="container">
    <div class="">
    <a href="{{url ('beranda/kategoribuku/formkabu') }}" class="btn btn-primary btn-lg"><i class="fas fas-plus">
    </i> Tambah Kategori Buku</a>
    <br><br>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="box-header">
            <div class="box-body">
                <table class="table table-hover">
                <thead>
                <tr>
                    <th>No</th>
                    <th>id kategori</th>
                    <th>Kategori Buku</th>
                    <th>Created At</th>
                    <th>Action</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($data as $n=> $dt)
                    <tr>
                        <td>{{$n+1 }}</td>
                        <td>{{$dt->idbuku}}</td>
                        <td>{{$dt->namakategori }}</td>
                        <td>{{$dt->created_at}}</td>
                        <td>
                        <a 
                        href="{{ url('beranda/kategoribuku/editkategori/'.$dt->idbuku) }}" 
                        class="btn btn-warning" id="edit">Edit</a>
                        <a 
                        href="{{ url('beranda/kategoribuku/'.$dt->idbuku) }}" 
                        class="btn btn-danger" id="hapus">Hapus</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
