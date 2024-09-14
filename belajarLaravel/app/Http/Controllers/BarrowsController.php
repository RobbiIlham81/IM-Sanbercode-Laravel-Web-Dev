<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barrows;
use Illuminate\Support\Facades\Auth;

class BarrowsController extends Controller
{
    public function store(Request $request, $book_id){
        $user_id = Auth::id();

        $request->validate([
            'tanggal_peminjaman' => 'required',
            'tanggal_pengembalian' => 'required'
        ]);

        Barrows::create([
            'tanggal_peminjaman' => $request->input('tanggal_peminjaman'),
            'tanggal_pengembalian' => $request->input('tanggal_pengembalian'),
            'user_id' => $user_id,
            'book_id' => $book_id,
        ]);

        return redirect('/books/'. $book_id);
    }
}
