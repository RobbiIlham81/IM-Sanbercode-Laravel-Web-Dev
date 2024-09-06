<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class biodataController extends Controller
{
    public function pendaftaran() 
    {
        return view('page.daftar');
    }

    public function home(Request $request)
    {
        $namaDepan = $request->input('fname');
        $namaBelakang = $request->input('lname');

        return view('page.home', ['namaDepan' => $namaDepan, 'namaBelakang' => $namaBelakang]);
    }
}
