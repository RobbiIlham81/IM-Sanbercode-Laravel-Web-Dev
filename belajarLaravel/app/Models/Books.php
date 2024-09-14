<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = ['title', 'summary', 'images', 'stock', 'category_id'];

    public function category()
    {
       return $this->belongsTo(Category::class, 'category_id');
    }

    public function listBarrows()
    {
        return $this->hasMany(Barrows::class, 'book_id');
    }
}
