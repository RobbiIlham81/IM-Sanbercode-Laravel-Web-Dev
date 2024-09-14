@extends('layouts.master')
@section('judul')
    Halaman Detail Kategori
@endsection    

@section('content')

<h1 class="text-primary">{{$category->name}}</h1>

<h4>List Buku</h4>
<div class="row">
    @forelse ($category->listBooks as $item)
    <div class="col-4">
        <div class="card">
            <img src="{{asset('uploads/'. $item->images)}}" class="card-img-top" alt="...">
            <div class="card-body">
            <h2>{{$item->title}}</h2>
            <p class="card-text">{{ Str::limit($item->summary, 150 )}}</p>
            <a href="/books/{{$item->id}}" class="btn btn-primary btn-block">Read More</a>
           
            </div>
        </div>
    </div>
    @empty
        <h5>Tidak ada Buku di Kategori ini</h5>
    @endforelse
</div>

<a href="/category" class="btn btn-secondary btn-sm">Kembali</a>
@endsection