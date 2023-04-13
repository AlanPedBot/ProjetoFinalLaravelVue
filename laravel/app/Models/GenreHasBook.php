<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GenreHasBook extends Model
{
    use HasFactory;
    protected $fillable = ['genre_id', 'book_id'];
    public function book(): HasMany
    {
        return $this->hasMany(Book::class);
    }
    public function genre(): HasMany
    {
        return $this->hasMany(Genre::class);
    }
}