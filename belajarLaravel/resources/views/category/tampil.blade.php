@extends('layouts.master')
@section('judul')
    Halaman Tampil Kategori
@endsection    

@section('content')
<a href="/category/create" class="btn btn-primary btn-sm">Tambah</a>


<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Action</th>
      
      </tr>
    </thead>
    <tbody>
        @forelse ($categories as $key=> $item)
            <tr>
                <th scope="row">{{$key + 1}}</th>
                <td>{{$item->name}}</td>
                <td>
                   
                    <form action="/category/{{$item->id}}" method="POST">
                        <a href="/category/{{$item->id}}" class="btn btn-info">Detail</a>
                        <a href="/category/{{$item->id}}/edit" class="btn btn-secondary">Edit</a>
                        @csrf
                        @method("Delete")

                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td>Category empty</td>
            </tr>
        @endforelse
     
     
    </tbody>
  </table>
  
 
    </tbody>
  </table>
@endsection