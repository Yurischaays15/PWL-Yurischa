@extends('layouts.display')

@section('title', 'Sistem Perpustakaan')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-15">
            <div class="kontenberanda">
            <h3 class="display-2"> <br>Halo, {{ Auth::user()-> name}}!</b></h3>
            <p class="lead">Selamat Datang di Website Sistem Perpustakaan SMAN 1 Mojosari</p>
            <hr class="my-4">
            <p>Ujian Akhir Semester | Mata Kuliah Pemrograman Web Lanjut.</p>
            <!-- <a class="btn btn-primary btn-lg" href="{{url ('/databuku')}}" role="button">BUKU</a> -->
            </div>
        </div>
    </div>
</div>
@endsection