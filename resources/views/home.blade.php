<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul', 'Halaman Home')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    @include('layout.header')
    <p>Ini Adalah Halaman Home</p>
    <p>Selamat datang !</p>
@endsection
