<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\biodataController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\BarrowsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [indexController::class, 'dashboard']);
Route::get('/daftar', [biodataController::class, 'pendaftaran']);
Route::post('/home', [biodataController::class, 'home']);

Route::get('/data-table', function() {
    return view('page.data-table');
});

Route::get('/table', function() {
    return view('page.table');
});

Route::middleware(['auth'])->group(function () {
    // CRUD
    // C => Create Data
    Route::get('/category/create', [CategoryController::class, 'create']);
    Route::post('/category', [CategoryController::class, 'store']);

    // R => Read Data
    Route::get('/category', [CategoryController::class, 'index']);
    Route::get('/category/{id}', [CategoryController::class, 'show']);

    // U +> Update Data
    Route::get('/category/{id}/edit', [CategoryController::class, 'edit']);
    Route::put('/category/{id}', [CategoryController::class, 'update']);

    // D => Delete Data
    Route::delete('/category/{id}', [CategoryController::class, 'destroy']);

    Route::post('/barrows/{book_id}', [BarrowsController::class, 'store']);
});

// CRUD Books
Route::resource('/books', BooksController::class);
Auth::routes();

