<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Books;
use File;


class BooksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Books::all();
        return view('books.tampil', ["books"=>$books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('books.tambah', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'images' => 'required|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required',
            'summary' => 'required',
            'stock' => 'required',
            'category_id' => 'required',

        ]);
      
        $imagesName = time().'.'.$request->images->extension(); 
        
        $request->images->move(public_path('uploads'), $imagesName);

        $books = new Books;
 
        $books->title = $request->input('title');
        $books->summary = $request->input('summary');
        $books->stock = $request->input('stock');
        $books->category_id = $request->input('category_id');
        $books->images = $imagesName;
 
        $books->save();
 
        return redirect('/books');
       
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $books = Books::find($id);
        
        return view('books.detail', ['books'=>$books]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::all();
        $books = Books::find($id);
        
        return view('books.edit', ['books'=>$books, 'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'images' => 'mimes:jpeg,jpg,png|max:2048',
            'title' => 'required',
            'summary' => 'required',
            'stock' => 'required',
            'category_id' => 'required',

        ]);

        $books = Books::find($id);

        if($request->has('images')){
            // Hapus file lama
            if($books->images) {

                File::delete('uploads/'. $books->images);
            }

            // Masukan gambar baru
            $imagesName = time().'.'.$request->images->extension(); 
        
            $request->images->move(public_path('uploads'), $imagesName);

            $books->images = $imagesName;
        }

        $books->title = $request->input("title");
        $books->summary = $request->input("summary");
        $books->stock = $request->input("stock");
        $books->category_id = $request->input("category_id");

        $books->save();

        return redirect('/books');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $books = Books::find($id);

        if($books->images) {

            File::delete('uploads/'. $books->images);
        }

        $books->delete();

        return redirect('/books');
    }
}
