@extends('layouts.master')
@section('judul')
    Halaman Detail Kategori
@endsection    

@section('content')

<h1 class="text-primary">{{$category->name}}</h1>

<a href="/category" class="btn btn-secondary btn-sm">Kembali</a>
@endsection