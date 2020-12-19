@extends('layouts.display')
@section('title', 'Details Buku')
@section('content')
    <div class="container">
    <a href="{{url ('beranda/databuku/tambahdatabuku') }}" class="btn btn-success btn-lg"><i class="fas fa-plus"></i> Tambah Buku</a>
    <br><br>
    <div class="row justify-content-center">
        <div class="col-md-30">
            <div class="box-header">
                <h4> {{$title}}</h4>
            </div>
            <div class="box-body">
            <from role="form" method="post" action=" {{url('beranda/databuku/tambahdatabuku') }}"
            enctype="multipart/form-data">
            {{csrf_field()}}
                <table class="table table-hover">
                <thead>
                <tr>
                    <th>No</th>
                    <!-- <th>Cover</th> -->
                    <th>Ubah Status</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Penulis</th>
                    <th>Stok</th>
                    <th>Status</th>
                    <th>Created_At</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($data as $n=> $dt)
                    <tr>
                        <td>{{$n+1 }}</td>
                        <!-- <td>
                        <img src="{{ asset('uploads/'.$dt->cover) }}" 
                        style="width: 50px;"> -->
                        </td>
                        <td>@if($dt->status == 1)
                        <a href="{{ url('beranda/databuku/'.$dt->idbooks) }}" class="btn btn-sm btn-danger">Non-Aktifkan</a>
                        @else
                        <a href="{{ url('beranda/databuku/'.$dt->idbooks) }}" class="btn btn-sm btn-success">Aktifkan</a>
                        @endif
                        </td>
                        <td>{{$dt->judul}}</td>
                        <td>{{ $dt->kategori}}</td>
                        <td>{{$dt->penulis}}</td>
                        <td>{{$dt->stok}}</td>
                        <td>
                        {{ ($dt->status == 1) ? 'Aktif' : 'Non-Aktif' }}</label></td>
                        <td>{{$dt->created_at}}</td>   
                        <td>
                        <a href="{{ url('beranda/databuku/edit/'.$dt->idbooks) }}" 
                        class="btn btn-warning" id="edit">Edit</a>
                        <a href="{{ url('beranda/databuku/'.$dt->idbooks) }}" 
                        class="btn btn-danger" id="hapus">Hapus</a>
                        <a href="{{ url('beranda/peminjaman/'.$dt->idbooks) }}" 
                        class="btn btn-flat btn-sm btn-primary">Pinjam</a>
                        </td>  

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection