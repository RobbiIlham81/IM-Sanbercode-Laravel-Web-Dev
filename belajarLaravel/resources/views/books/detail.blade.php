@extends('layouts.master')
@section('judul')
Halaman Detail Buku
@endsection

@section('content')

<img src="{{asset('uploads/'.$books->images)}}" class="img-fluid" alt="...">
<h1 class="text-primary">{{$books->title}}</h1>
<p>{{$books->summary}}</p>

<hr>

<h4 class="text-info">List Peminjaman Buku</h4>

@forelse ($books->listBarrows as $item)
    <div class="card mt-2">
        <div class="card-header">
            {{$item->createdBy->name}}
        </div>
        <div class="card-body">
            <h5 class="card-title">Tanggal Peminjaman</h5>   
            <p class="card-text">{{$item->tanggal_peminjaman}}</p>
            <h5 class="card-title">Tanggal Pengembalian</h5>
            <p class="card-text">{{$item->tanggal_pengembalian}}</p>
        </div>
       
     </div>
@empty
    <h4>Tidak ada Riwayat Peminjaman Buku</h4>
@endforelse

<hr>

@auth
    <form action="/barrows/{{$books->id}}" method="POST">
        @csrf
        <div class="form-group">
            <label >Tanggal Peminjaman</label>
            <input type="date" name="tanggal_peminjaman" class="form-control">
        </div> <br>
        <div class="form-group">
            <label >Tanggal Pengembalian</label>
            <input type="date" name="tanggal_pengembalian" class="form-control">
        </div>
        <input type="submit" value="Tambah Peminjaman" class="btn btn-primary btn-sm btn-block">
    </form>
    
@endauth


@endsection