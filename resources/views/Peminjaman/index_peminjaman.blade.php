@extends('layouts.display')
@section('title', 'Peminjaman Buku')
@section('content')
    <div class="container">
 
<div class="row">
    <div class="col-md-6">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
            <div class="box-body">
               <table class="table table-hover">
                   <thead>
                       <tr>
                           <th>No</th>
                           <th>peminjam</th>
                           <th>buku</th>
                           <th>created_at</th>
                           <th>Action</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach($data as $n=> $dt)
                       <tr>
                           <td>{{ $n+1 }}</td>
                           <td>{{$dt-> user}}</td>
                           <td>{{ $dt->buku }}</td>
                           <td>{{ $dt->created_at }}</td>
                           <td>
                           <a href="{{ url('beranda/peminjaman/'.$dt->idpinjam)}}" 
                            class="btn btn-danger" id="hapus1">Hapus</a>
                            </td>
                       </tr>
                       @endforeach
                   </tbody>
               </table>
            </div>
        </div>
    </div>
</div>
 
@endsection